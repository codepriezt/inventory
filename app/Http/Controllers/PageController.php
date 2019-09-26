<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{


    public function signUp()
    {
        return view('general .signup');
    }


    public function signIn()
    {
        return view('general .signin');
    }
}
