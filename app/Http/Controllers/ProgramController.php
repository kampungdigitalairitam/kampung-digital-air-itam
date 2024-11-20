<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramContent;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|image',
            'description' => 'required|string',
        ]);

        $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');

        $program = Program::create([
            'title' => $validated['title'],
            'thumbnail' => $thumbnailPath,
            'description' => $validated['description'],
        ]);

        return redirect('/admin/tambahprogram');
    }


    public function program()
{
    $programs = Program::all(); // Mengambil semua data dari tabel programs
    return view('home.program', compact('programs'));
}

public function show($id)
{
    $program = Program::findOrFail($id); // Ambil data program berdasarkan ID
    $contents = ProgramContent::where('program_id', $id)->get(); // Ambil isi konten terkait program
    return view('home.showprogram', compact('program', 'contents'));
}


}
