<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramContent;
use Illuminate\Http\Request;

class ProgramContentController extends Controller
{
    public function store(Request $request, $programId)
    {
        // Validasi data foto dan deskripsi
        $request->validate([
            'photos.*' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'descriptions.*' => 'required|string|max:255',
        ]);

        // Ambil program berdasarkan ID
        $program = Program::findOrFail($programId);

        // Loop untuk menyimpan konten foto dan deskripsi
        foreach ($request->photos as $index => $photo) {
            if ($photo) {
                $content = new ProgramContent();
                $content->program_id = $program->id;
                $content->photo = $photo->store('contents', 'public');
                $content->description = $request->descriptions[$index];
                $content->save();
            }
        }

        // Redirect ke halaman admin setelah konten disimpan
        return redirect()->route('tambahkegiatan', ['program_id' => $programId])
                         ->with('success', 'Program dan konten berhasil diupload!');
    }





}
