<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
   public function getOffers()
   {
       return Offer::get();
   }


   public function store(Request $request)
   {
       //validate data before insert to database
       $rules=$this->getRules();
       $messages=$this->getMessages();


       $validator=Validator::make($request->all(),$rules,$messages);

       if($validator->fails())
       {
           return redirect()->back()->withErrors($validator)->withInput($request->all());
       }

       //insert data after validation
       Offer::create([
           'name'=>$request->name,
           'price'=>$request->price,
           'details'=>$request->details,
       ]);

       return redirect()->back()->with(['success'=>'تم اضافة العرض بنجاح']);

   }
   public function getRules()
   {
       return $rules=[
           'name'=>'required|max:10|unique:offers,name',
           'price'=>'required|numeric',
           'details'=>'required',
       ];
   }

    public function getMessages()
    {
        return $message=[
            'name.required'=>__('messages.offer name required'),
            'name.unique'=>__('messages.offer name required'),
            'name.max'=>__('messages.name max'),
            'price.numeric'=>'ادخل السعر بالارقام',
            'details.required'=>'ادخل التفاصيل'
        ];
    }

   public function create()
   {
       return view('offers.create');
   }
}
