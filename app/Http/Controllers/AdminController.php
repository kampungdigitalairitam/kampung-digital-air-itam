<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\ProgramContent;

class AdminController extends Controller
{

    function dashboard(){
        return view('admin.dashboard');
    }
    function tambahkegiatan(){
        return view('admin.tambahkegiatan');
    }

    function kelolakegiatan(){
        return view('admin.kelolakegiatan');
    }

    



//bagian berita
function kelolaberita(){
    return view('admin.kelolaberita');
}
}
