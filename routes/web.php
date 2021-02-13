<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $name=[];
    return view('welcome',compact('name'));
});

Route::get('test1',function(){
    return 'welcome';
});

Route::get('test2/{id}',function($id){
    return $id;
});

Route::get('test3/{id?}',function(){
    return 'welcome route test3';
});

Route::get('landing',function (){
    return view('landing');
});

Route::get('about',function (){
    return view('about');
});


/*
Route::namespace('Front')->group(function()
{
    Route::get('users','UserController@showUserName');

}

);

Route::prefix('users')->namespace('Front')->group(function(){
    Route::get('show','UserController@showUserName');
    Route::delete('delete','UserController@DeleteUsername');
    Route::get('edit','UserController@showUserName');
    Route::get('update','UserController@updateUserName');
});


Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
    Route::get('/',function(){
        return 'work';
    });
    Route::get('show','UserController@showUserName');
    Route::delete('delete','UserController@DeleteUsername');
    Route::get('edit','UserController@showUserName');
    Route::get('update','UserController@updateUserName');

});
*/
//namespace('Admin')
Route::group(['namespace'=>'Admin'],function(){
    Route::get('second','SecondController@showString');
    Route::get('third','SecondController@showstring3');

}
);




Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('news','NewsController');

Route::get('redirect/{service}','SocialController@redirect');
Route::get('callback/{service}','SocialController@callback');

Route::get('fillable','CrudController@getOffers');
Route::get('fillable','CrudController@store');

Route::group(['prefix'=>'offers'],function (){
    //Route::get('store','CrudController@store');
    Route::group(['prefix'=>'{lang}'],function ($lang){
        Route::get('create','CrudController@create');
    });

    Route::post('store','CrudController@store')->name('offers.store');
});

