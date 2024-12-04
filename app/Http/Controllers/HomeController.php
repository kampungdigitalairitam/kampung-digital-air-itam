<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
        return view('home.home');
    }

    function program(){
        return view('home.program');
    }

    function contact(){
        return view('home.contact');
    }



}
