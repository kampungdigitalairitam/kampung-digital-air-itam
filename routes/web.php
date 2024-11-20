<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProgramContentController;
use App\Http\Controllers\ProgramController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home.home');
Route::get('/home/program', [HomeController::class, 'program'])->name('home.program');

Route::get('/pendaftaran', [DaftarController::class, 'index'])->name('pendaftaran.index');

//login


Route::get('/admin', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [AuthController::class, 'login'])->name('admin.authenticate');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('home.home');
    Route::get('/admin/mediapartner', [PartnerController::class, 'index'])->name('admin.mediapartner');
    Route::post('/admin/delete{id}', [PartnerController::class, 'delete'])->name('admin.delete');
});

Route::post('/admin/submit', [PartnerController::class, 'submit'])->name('admin.submit');

Route::get('/admin/tambahprogram', [AdminController::class, 'tambahprogram'])->name('tambahprogram');


Route::post('/admin/tambahprogram', [ProgramController::class, 'store']);
Route::post('/admin/tambahprogram/{program_id}/contents', [ProgramContentController::class, 'store']);


Route::get('/home/program', [ProgramController::class, 'program'])->name('home.program');
Route::get('/home/showprogram/{id}', [ProgramController::class, 'show'])->name('home.showprogram');

