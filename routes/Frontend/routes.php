<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

Route::get('/blog', [FrontendController::class, 'index'])->name('frontend.blog');
Route::get('/blog/{id}', [FrontendController::class, 'show'])->name('frontend.blog-detail');

Route::get('/kontakt', function () {
    return view('frontend.pages.contact');
})->name('frontend.contact');

Route::get('/cenik', function () {
    return view('frontend.pages.price-list');
})->name('frontend.price-list');
