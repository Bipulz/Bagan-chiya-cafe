<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/story', function () {
    return view('story');
})->name('story');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/visitus', function () {
    return view('visitus');
})->name('visitus');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AdminAuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
