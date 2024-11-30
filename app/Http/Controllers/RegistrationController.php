<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('home.register');
    }

    public function index()
{
    $registrations = Registration::all();
    return view('admin.registrations', compact('registrations'));
}



public function store(Request $request)
{
    $validated = $request->validate([
        'email' => 'required|email',
        'privacy_policy' => 'required|boolean',
        'full_name' => 'required|string|max:255',
        'district_origin' => 'nullable|string|max:255',
        'current_residence' => 'nullable|string|max:255',
        'full_address' => 'nullable|string|max:255',
        'employment_status' => 'required|in:yes,no_studying,no_job_seeking',
        'last_school' => 'nullable|string|max:255',
        'major' => 'nullable|string|max:255',
        'class_or_semester' => 'nullable|string|max:255',
        'whatsapp_contact' =>  'required|regex:/^0[0-9]{9,}$/',
        'telegram_contact' => 'nullable|string|max:15',
        'instagram' => 'nullable|string|max:255',
        'motivation' => 'nullable|string',
        'referral_source' => 'nullable|string|max:255',
    ]);


// Ubah nomor ke format internasional
$validated['whatsapp_contact'] = preg_replace('/^0/', '62', $validated['whatsapp_contact']);

    $registration = Registration::create($validated);


        // Mengecek apakah data berhasil disimpan
        if ($registration) {
            // Menampilkan pesan sukses dan arahkan ke halaman lain
            return redirect()->route('register.form')->with('success', 'Pendaftaran berhasil dikirim.');
        }

        // Jika gagal, menampilkan pesan error
        return redirect()->route('register.form')->with('error', 'Terjadi kesalahan. Pendaftaran gagal.');


}

public function destroy($id)
{
    $registration = Registration::findOrFail($id);
    $registration->delete();

    return redirect()->route('admin.registrations')->with('success', 'Pendaftaran berhasil dihapus.');
}

public function show($id)
{
    $registration = Registration::findOrFail($id);
    return view('admin.registrations-detail', compact('registration'));
}


}
