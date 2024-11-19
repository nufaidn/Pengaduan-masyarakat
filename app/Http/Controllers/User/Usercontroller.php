<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
     return view('user.landing');

    }

    public function formRegister()
    {
        return view('user.register');
    }
}
