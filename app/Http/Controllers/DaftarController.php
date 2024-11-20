<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    function index(){
        return view('pendaftaranpartner.index');
    }
}
