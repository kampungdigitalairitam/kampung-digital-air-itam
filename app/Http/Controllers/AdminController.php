<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    function dashboard(){
        return view('admin.dashboard');
    }
    function tambahkegiatan(){
        return view('admin.tambahkegiatan');
    }

    function kelolakegiatan(){
        // Ambil semua data dari tabel programs
        $programs = Program::all();

        // Kirim data ke view
        return view('admin.kelolakegiatan', compact('programs'));
    }



    public function destroy($id)
{
    // Cari data berdasarkan ID
    $program = Program::findOrFail($id);

    // Hapus thumbnail dari storage jika ada
    if ($program->thumbnail && Storage::exists('public/' . $program->thumbnail)) {
        Storage::delete('public/' . $program->thumbnail);
    }

    // Hapus data dari database
    $program->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.kelolakegiatan')->with('success', 'Program berhasil dihapus!');
}

//bagian berita
function kelolaberita(){
    return view('admin.kelolaberita');
}
}
