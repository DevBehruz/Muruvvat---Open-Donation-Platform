<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }
    public function account(){
        $account = Register::where('name',"Behruz Ernazarov")->get();
        return view('account',compact('account'));
    }
    public function login(){
        return view('login');
    }
}
