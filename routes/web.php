<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\RoutController;
// use App\Http\Controllers\GalleryController;
//Guest
Route::get('/', [GuestController::class, 'index'])->name('guest.index');
Route::get('/about', [RoutController::class, 'about'])->name('guest.about');
Route::get('/gallery', [RoutController::class, 'gallery'])->name('guest.gallery');
Route::get('/contact', [RoutController::class, 'contact'])->name('guest.contact');

//Dashboard
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
    Route::resource('collections', CollectionController::class)->middleware('auth');
});