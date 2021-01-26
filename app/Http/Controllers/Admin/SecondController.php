<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showString()
    {
       return 'static string';
    }
    public  function showstring2()
    {
        return 'show string 2';
    }
    public  function showstring3()
    {
        return 'show string 3';
    }
}
