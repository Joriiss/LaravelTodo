<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Requests\ContactFormRequest;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/list', [UserController::class, 'index'])->name('list');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

