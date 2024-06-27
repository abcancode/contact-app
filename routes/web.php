<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;

Route::get('/', WelcomeController::class);

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');