<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{

    public function index()
{
    $beritas = Berita::all();
    return view('admin.kelolaberita', compact('beritas'));
}

    public function create()
{
    return view('admin.tambahberita');
}


public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'konten' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
    ]);

    $path = null;
    if ($request->hasFile('foto')) {
        $path = $request->file('foto')->store('berita', 'public');
    }

    Berita::create([
        'judul' => $request->judul,
        'konten' => $request->konten,
        'foto' => $path,
    ]);

    return redirect()->route('admin.kelolaberita')->with('success', 'Berita berhasil ditambahkan!');
}

public function edit($id)
{
    $berita = Berita::findOrFail($id);
    return view('admin.editberita', compact('berita'));
}



public function update(Request $request, $id)
{
    $berita = Berita::findOrFail($id);

    // Validasi tanpa membatasi jenis file gambar
    $request->validate([
        'judul' => 'required|string|max:255',
        'konten' => 'required',
        'foto' => 'nullable|image|max:10240',  // Hanya memastikan bahwa itu adalah gambar
    ]);

    $path = $berita->foto;
    if ($request->hasFile('foto')) {
        // Hapus gambar lama jika ada
        if ($path) {
            Storage::delete('public/' . $path);
        }
        // Upload gambar baru
        $path = $request->file('foto')->store('berita', 'public');
    }

    // Update data berita
    $berita->update([
        'judul' => $request->judul,
        'konten' => $request->konten,
        'foto' => $path,
    ]);

    return redirect()->route('admin.kelolaberita')->with('success', 'Berita berhasil diperbarui!');
}



public function destroy($id)
{
    $berita = Berita::findOrFail($id);

    if ($berita->foto) {
        Storage::delete('public/' . $berita->foto);
    }

    $berita->delete();

    return redirect()->route('admin.kelolaberita')->with('success', 'Berita berhasil dihapus!');
}


public function showUser()
{
    $beritas = Berita::latest()->get();
    return view('home.program', compact('beritas'));
}

}
