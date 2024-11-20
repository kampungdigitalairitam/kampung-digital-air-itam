<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramContent;
use Illuminate\Http\Request;

class ProgramContentController extends Controller
{
    public function store(Request $request, $programId)
{
    $request->validate([
        'photos.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'descriptions.*' => 'required|string|max:255',
    ]);

    $program = Program::findOrFail($programId);

    foreach ($request->photos as $index => $photo) {
        if ($photo) {
            $content = new ProgramContent();
            $content->program_id = $program->id;
            $content->photo = $photo->store('contents', 'public');
            $content->description = $request->descriptions[$index];
            $content->save();
        }
    }

    return redirect()->route('admin.programs.tambahkegiatan')->with('success', 'Program dan konten berhasil diupload!');
}




}
