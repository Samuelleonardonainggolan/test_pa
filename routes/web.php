<?php

use App\Http\Controllers\Admin\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Grouping berita routes with auth middleware
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');


Route::middleware(['auth'])->group(function () {
    Route::get('add-berita', [BeritaController::class, 'create']);
    Route::post('save-berita', [BeritaController::class, 'store']);
    Route::get('edit/{id}', [BeritaController::class, 'edit']);
    Route::post('update', [BeritaController::class, 'update']);
    Route::get('delete/{id}', [BeritaController::class, 'destroy']);
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/admin/home', function () {
    return view('admin.home');
})->name('homeAdmin');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/siswa', function () {
    return view('siswa');
})->name('siswa');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
