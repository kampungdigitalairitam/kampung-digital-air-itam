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

        return redirect('/admin/kelolakegiatan');
    }


    public function program()
{
    $programs = Program::all(); // Mengambil semua data dari tabel programs
    return view('admin.kelolakegiatan', compact('programs'));
}

public function show($id)
{
    $program = Program::findOrFail($id); // Ambil data program berdasarkan ID
    $contents = ProgramContent::where('program_id', $id)->get(); // Ambil isi konten terkait program
    return view('admin.kelolakegiatan', compact('program', 'contents'));
}

public function destroy(Program $program)
{
    // Hapus program dan konten terkait
    $program->delete();

    return redirect()->route('admin.kelolakegiatan')->with('success', 'Program dan konten terkait berhasil dihapus!');
}



//bagian berita
function kelolaberita(){
    return view('admin.kelolaberita');
}
}
