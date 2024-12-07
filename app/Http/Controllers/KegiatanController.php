<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function tambahKegiatan()
    {
        return view('admin.tambahkegiatan');
    }

    public function simpanKegiatan(Request $request)
    {
        $request->validate([
            'tumbnail_image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content_images.*' => 'image|mimes:jpeg,png,jpg|max:10240',
            'content_descriptions.*' => 'nullable|string',
        ]);

        // Simpan thumbnail
        $tumbnailPath = $request->file('tumbnail_image')->store('uploads/tumbnail', 'public');

        // Simpan konten
        $contentImages = [];
        if ($request->hasFile('content_images')) {
            foreach ($request->file('content_images') as $file) {
                $contentImages[] = $file->store('uploads/content', 'public');
            }
        }

        $kegiatan = Kegiatan::create([
            'tumbnail_image' => $tumbnailPath,
            'title' => $request->title,
            'description' => $request->description,
            'content_images' => $contentImages,
            'content_descriptions' => $request->content_descriptions,
        ]);

        return redirect()->route('admin.kelolakegiatan')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function kelolaKegiatan()
    {
        $kegiatans = Kegiatan::all();
        return view('admin.kelolakegiatan', compact('kegiatans'));
    }

    public function hapusKegiatan(Kegiatan $kegiatan)
    {
        // Hapus file dari storage
        Storage::disk('public')->delete($kegiatan->tumbnail_image);
        if ($kegiatan->content_images) {
            foreach ($kegiatan->content_images as $file) {
                Storage::disk('public')->delete($file);
            }
        }

        $kegiatan->delete();
        return redirect()->route('admin.kelolakegiatan')->with('success', 'Kegiatan berhasil dihapus.');
    }

    public function editKegiatan(Kegiatan $kegiatan)
{
    // Mengambil semua kegiatan
    $kegiatans = Kegiatan::all();

    // Mengirimkan data ke view
    return view('admin.tambahkegiatan', compact('kegiatan', 'kegiatans'));
}


    public function updateKegiatan(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'tumbnail_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content_images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'content_descriptions.*' => 'nullable|string',
        ]);

        if ($request->hasFile('tumbnail_image')) {
            // Hapus file lama
            Storage::disk('public')->delete($kegiatan->tumbnail_image);
            // Simpan file baru
            $kegiatan->tumbnail_image = $request->file('tumbnail_image')->store('uploads/tumbnail', 'public');
        }

        if ($request->hasFile('content_images')) {
            // Hapus file lama
            if ($kegiatan->content_images) {
                foreach ($kegiatan->content_images as $file) {
                    Storage::disk('public')->delete($file);
                }
            }
            // Simpan file baru
            $contentImages = [];
            foreach ($request->file('content_images') as $file) {
                $contentImages[] = $file->store('uploads/content', 'public');
            }
            $kegiatan->content_images = $contentImages;
        }

        $kegiatan->update([
            'title' => $request->title,
            'description' => $request->description,
            'content_descriptions' => $request->content_descriptions,
        ]);

        return redirect()->route('admin.kelolakegiatan')->with('success', 'Kegiatan berhasil diupdate.');
    }

    public function kegiatan()
    {
        $kegiatans = Kegiatan::all();
        return view('home.kegiatan', compact('kegiatans'));
    }

    public function showKegiatan(Kegiatan $kegiatan)
    {
        return view('home.showkegiatan', compact('kegiatan'));
    }
}
