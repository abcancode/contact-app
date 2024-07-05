<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactNoteController;


Route::get('/', WelcomeController::class);

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

Route::resource('/companies', CompanyController::class);
Route::resources([
    '/tags' => TagController::class,
    '/tasks' => TaskController::class
]);

//Route::resource('/activities', ActivityController::class)->only([
   // 'create', 'store', 'edit', 'update', 'destroy'
//]);
// Alternate method for the only method.
//Route::resource('/activities', ActivityController::class)->except([
  //'index', 'show'
//]);

Route::resource('/contacts.notes', ContactNoteController::class)->shallow();
// Route::resource('/activities', ActivityController::class)->except([
//     'index', 'show'
// ]);
// Route::resource('/activities', ActivityController::class)->names([
//     'index' => 'activities.all',
//     'show' => 'activities.view'
// ]);
Route::resource('/activities', ActivityController::class)->parameters([
  'activities' => 'active'
]);