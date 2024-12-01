<?php

namespace App\Http\Controllers;

use App\Models\Program;

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

        return redirect('/admin/tambahkegiatan');
    }


    public function program()
{
    $programs = Program::all(); // Mengambil semua data dari tabel programs
    return view('home.kegiatan', compact('programs'));
}

public function show($id)
{
    // Ambil program dan relasi contents
    $program = Program::with('contents')->findOrFail($id);

    // Pastikan contents diambil
    $contents = $program->contents;

    return view('home.showkegiatan', compact('program', 'contents'));
}




}
