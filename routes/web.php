<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/story', function () {
    return view('story');
})->name('story');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Route::get('/visitus', function () {
//     return view('visitus');
// })->name('visitus');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AdminAuthController::class, 'login']);

Route::get('/visitus', [AboutController::class, 'index'])->name('visitus');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::view('/dashboard', 'admin.dashboard.index')->name('admin.dashboard.index');
    Route::get('/menu', [AdminMenuController::class, 'index'])->name('admin.menu.index');
    Route::view('/story', 'admin.story.index')->name('admin.story.index');
    Route::view('/gallery', 'admin.gallery.index')->name('admin.gallery.index');
    Route::view('/about', 'admin.about.index')->name('admin.about.index');
    Route::post('/menu/categories', [AdminMenuController::class, 'storeCategory'])->name('admin.menu.categories.store');
    Route::put('/menu/categories/{category}', [AdminMenuController::class, 'updateCategory'])->name('admin.menu.categories.update');
    Route::delete('/menu/categories/{category}', [AdminMenuController::class, 'destroyCategory'])->name('admin.menu.categories.destroy');
    Route::post('/menu/items', [AdminMenuController::class, 'storeItem'])->name('admin.menu.items.store');
    Route::put('/menu/items/{item}', [AdminMenuController::class, 'updateItem'])->name('admin.menu.items.update');
    Route::delete('/menu/items/{item}', [AdminMenuController::class, 'destroyItem'])->name('admin.menu.items.destroy');
    Route::post('/menu/title', [AdminMenuController::class, 'updateMenuTitle'])->name('admin.menu.title.update');
    Route::post('/admin/menu/cta', [AdminMenuController::class, 'updateCta'])->name('admin.menu.cta.update');
    Route::post('/admin/menu/hero', [AdminMenuController::class, 'updateHero'])->name('admin.menu.hero.update');
    Route::get('/admin/about', [AdminAboutController::class, 'index'])->name('admin.about.index');
    Route::post('/admin/about', [AdminAboutController::class, 'store'])->name('admin.about.store');

    Route::post('/admin/about/hero', [AdminAboutController::class, 'updateHero'])->name('admin.visitus.hero.update');

    Route::post('/admin/about/section', [AdminAboutController::class, 'updateAbout'])->name('admin.visitus.about.update');

    Route::post('/admin/about/visit', [AdminAboutController::class, 'updateVisit'])->name('admin.visitus.visit.update');
});
