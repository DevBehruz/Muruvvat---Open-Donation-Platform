<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class ApplicationController extends Controller
{
    public function application(){
        return view('application');
    }
    public function charity(){
        $data = Application::all();
        return view('charity',compact('data'));
    }
    public function  charityDetails(){
        return view('charity-details');
    }
    
}
