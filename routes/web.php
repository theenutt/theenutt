<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

Route::get('/', function () {
    return view('headpage');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::post('/contacts/submit', [ContactsController::class,'submit'])->name('contact-form');

Route::get('/contacts/all', [ContactsController::class,'allData'])->name('contact-data');

Route::get('/contacts/all/{id}', [ContactsController::class,'showmes'])->name('contact-showmes');

Route::get('/contacts/all/{id}/edit', [ContactsController::class,'editmes'])->name('contact-edit');

Route::post('/contacts/all/{id}/edit', [ContactsController::class,'editmessub'])->name('contact-editsub');

Route::get('/contacts/all/{id}/delete', [ContactsController::class,'deletemes'])->name('contact-delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homeauth');
