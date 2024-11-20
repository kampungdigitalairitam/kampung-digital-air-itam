<?php

namespace App\Http\Controllers;

use App\Models\ProgramContent;
use Illuminate\Http\Request;

class ProgramContentController extends Controller
{
    public function store(Request $request, $programId)
    {
        $validated = $request->validate([
            'photos.*' => 'required|image',
            'descriptions.*' => 'required|string',
        ]);

        foreach ($request->file('photos') as $index => $photo) {
            $photoPath = $photo->store('program_contents', 'public');

            ProgramContent::create([
                'program_id' => $programId,
                'photo' => $photoPath,
                'description' => $request->descriptions[$index],
            ]);
        }

        return redirect("/admin/tambahprogram/{$programId}");
    }



}
