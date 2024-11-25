<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
        return view('home.home');
    }

    function program(){
        return view('home.program');
    }

// HomeController.php
public function showKegiatan($program_id)
{
    // Ambil data program berdasarkan ID
    $program = Program::findOrFail($program_id);

    // Kirim data ke view
    return view('home.showkegiatan', compact('program'));
}

}
