<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramContent;
use Illuminate\Http\Request;

class ProgramContentController extends Controller
{
    public function store(Request $request, $programId)
{
    $validated = $request->validate([
        'photos.*' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        'descriptions.*' => 'required|string|max:255',
    ]);

    $program = Program::findOrFail($programId);

    foreach ($request->photos as $index => $photo) {
        $content = new ProgramContent();
        $content->program_id = $program->id; // Hubungkan ke program
        $content->photo = $photo->store('contents', 'public');
        $content->description = $request->descriptions[$index];
        $content->save();
    }

    return redirect()->route('tambahkegiatan', ['program_id' => $programId])
                     ->with('success', 'Konten berhasil ditambahkan!');
}


}



