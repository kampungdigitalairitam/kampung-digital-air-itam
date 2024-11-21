<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Cocokkan email dengan .env
    if (
        $request->email === env('ADMIN_EMAIL') &&
        Hash::check($request->password, env('ADMIN_PASSWORD'))
    ) {
        session(['admin_logged_in' => true]);
        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors(['error' => 'Invalid email or password.']);
}

public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

}
