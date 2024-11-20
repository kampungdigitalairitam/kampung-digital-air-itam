<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function tambahprogram(){
        return view('admin.tambahprogram');
    }
}
