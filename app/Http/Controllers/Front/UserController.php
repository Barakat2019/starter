<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function  showUserName()
    {
        return 'Ahmed Emam';
    }
    public  function DeleteUsername()
    {
        return 'Username Deleted';
    }

    public function  updateUserName()
    {
        return 'Username updated';
    }
}
