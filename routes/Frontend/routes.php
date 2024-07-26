<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

Route::get('/blog', [FrontendController::class, 'index'])->name('frontend.blog');
Route::get('/blog/{id}', [FrontendController::class, 'show'])->name('frontend.blog-detail');

Route::get('/kontakt', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/kontakt/odeslat', [FrontendController::class, 'submitContactForm'])->name('frontend.contact.submit');

Route::get('/cenik', [FrontendController::class, 'cenikShow'])->name('frontend.price-list');
