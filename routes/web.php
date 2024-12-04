<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PartnerController;

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



    //bagian kegiatan
    Route::get('/tambahkegiatan', [KegiatanController::class, 'tambahKegiatan'])->name('tambahkegiatan');

    Route::post('/admin/tambahkegiatan', [KegiatanController::class, 'simpanKegiatan'])->name('admin.tambahkegiatan');

    Route::get('/admin/kelolakegiatan', [KegiatanController::class, 'kelolaKegiatan'])->name('admin.kelolakegiatan');
    Route::delete('/admin/kelolakegiatan/{kegiatan}', [KegiatanController::class, 'hapusKegiatan'])->name('admin.kelolakegiatan.delete');;
    Route::get('/admin/kelolakegiatan/{kegiatan}/edit', [KegiatanController::class, 'editKegiatan'])->name('admin.kelolakegiatan.edit');
    Route::put('/admin/kelolakegiatan/{kegiatan}', [KegiatanController::class, 'updateKegiatan'])->name('admin.kelolakegiatan.update');



    //kelola pendaftaran
    Route::get('/admin/registrations', [RegistrationController::class, 'index'])->name('admin.registrations');
    Route::delete('/admin/registrations/{id}', [RegistrationController::class, 'destroy'])->name('admin.registrations.delete');
    Route::get('/registrations/{id}', [RegistrationController::class, 'show'])->name('admin.registrations.show');
});

//bagian submit media partner user
Route::post('/admin/submit', [PartnerController::class, 'submit'])->name('admin.submit');

//bagian view kegiatan user

Route::get('/home/kegiatan', [KegiatanController::class, 'kegiatan'])->name('home.kegiatan');
Route::get('/home/kegiatan/{kegiatan}', [KegiatanController::class, 'showKegiatan'])->name('home.showkegiatan');




Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('/admin/kelolaberita', [BeritaController::class, 'index'])->name('admin.kelolaberita');
    Route::get('/admin/tambahberita', [BeritaController::class, 'create'])->name('admin.tambahberita');
    Route::post('/admin/simpan-berita', [BeritaController::class, 'store'])->name('admin.simpanberita');
    Route::get('/admin/editberita/{id}', [BeritaController::class, 'edit'])->name('admin.editberita');
    Route::put('/admin/updateberita/{id}', [BeritaController::class, 'update'])->name('admin.updateberita');
    Route::delete('/admin/hapusberita/{id}', [BeritaController::class, 'destroy'])->name('admin.hapusberita');
});

Route::get('/home/program', [BeritaController::class, 'showUser'])->name('home.program');


//pendaftaran
Route::get('/home/register', [RegistrationController::class, 'create'])->name('register.form');
Route::post('/home/register', [RegistrationController::class, 'store'])->name('register.store');

