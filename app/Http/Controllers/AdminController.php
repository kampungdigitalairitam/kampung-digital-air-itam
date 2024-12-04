<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{

    function dashboard(){
        return view('admin.dashboard');
    }


//bagian berita
function kelolaberita(){
    return view('admin.kelolaberita');
}
}
