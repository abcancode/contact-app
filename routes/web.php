<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = "
    
    <h1>Contact App</h1>

    <div>

    <a href='" .  route('contacts.index')  .  "'>All contacts</a>

    <a href='" .  route('contacts.create')  .  "'>Add contact</a>

    <a href='" . route('contacts.show', 1) . "'>Show contact</a>

    </div>

    ";

    return $html;

});
    
    Route::get('/contacts', function () {
    
        return "<h1>All contacts are here</h1>";
    
    })->name('contacts.index');
    
    Route::get('/contacts/create', function () {
    
        return "<h1>Add new contact</h1>";
    
    })->name('contacts.create');
    
    Route::get('/contacts/{id}', function ($id) {
    
        return "Contact " . $id ;
    
    })->name('contacts.show');
    
    Route::fallback( function () {
    
        return "<h1>Sorry, the page does not exist</h1>" ;
    
    });
    
