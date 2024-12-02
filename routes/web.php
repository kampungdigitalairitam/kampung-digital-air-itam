<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProgramContentController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegistrationController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home.home');
Route::get('/home/program', [HomeController::class, 'program'])->name('home.program');



Route::get('/pendaftaranpartner', [DaftarController::class, 'index'])->name('pendaftaranpartner.index');

//login
Route::get('/admin', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [AuthController::class, 'login'])->name('admin.authenticate');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/mediapartner', [PartnerController::class, 'index'])->name('admin.mediapartner');
    Route::post('/admin/delete{id}', [PartnerController::class, 'delete'])->name('admin.delete');

    //tambahkegiatan
    Route::get('/admin/tambahkegiatan', [AdminController::class, 'tambahkegiatan'])->name('tambahkegiatan');
    Route::post('/admin/tambahkegiatan', [ProgramController::class, 'store']);
    Route::post('/tambahkegiatan/{program_id}/contents', [ProgramContentController::class, 'store']);


    //kelolakegiatan
    Route::get('/admin/kelolakegiatan', [AdminController::class, 'kelolakegiatan'])->name('admin.kelolakegiatan');
   
    Route::delete('/admin/kelolakegiatan/{program}', [AdminController::class, 'destroy'])->name('admin.kelolakegiatan.destroy');

    //kelola pendaftaran
    Route::get('/admin/registrations', [RegistrationController::class, 'index'])->name('admin.registrations');
    Route::delete('/admin/registrations/{id}', [RegistrationController::class, 'destroy'])->name('admin.registrations.delete');
    Route::get('/registrations/{id}', [RegistrationController::class, 'show'])->name('admin.registrations.show');
});

//bagian submit media partner user
Route::post('/admin/submit', [PartnerController::class, 'submit'])->name('admin.submit');

//bagian view kegiatan user
Route::get('/home/kegiatan', [ProgramController::class, 'program'])->name('home.kegiatan');
Route::get('/home/showkegiatan/{program_id}', [ProgramController::class, 'show'])->name('home.showkegiatan');




Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/kelolaberita', [BeritaController::class, 'index'])->name('kelolaberita');
    Route::get('/tambahberita', [BeritaController::class, 'create'])->name('tambahberita');
    Route::post('/simpan-berita', [BeritaController::class, 'store'])->name('simpanberita');
    Route::get('/editberita/{id}', [BeritaController::class, 'edit'])->name('editberita');
    Route::put('/updateberita/{id}', [BeritaController::class, 'update'])->name('updateberita');
    Route::delete('/hapusberita/{id}', [BeritaController::class, 'destroy'])->name('hapusberita');
});

Route::get('/home/program', [BeritaController::class, 'showUser'])->name('home.program');


//pendaftaran
Route::get('/home/register', [RegistrationController::class, 'create'])->name('register.form');
Route::post('/home/register', [RegistrationController::class, 'store'])->name('register.store');
