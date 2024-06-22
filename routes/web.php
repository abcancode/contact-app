<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    

    return view('welcome');

});
    
    Route::get('/contacts', function () {
    
        return view('contacts.index');
    
    })->name('contacts.index');
    
    Route::get('/contacts/create', function () {
    
        return view('contacts.create');;
    
    })->name('contacts.create');
    
    Route::get('/contacts/{id}', function ($id) {
    
        return "Contact " . $id ;
    
    })->name('contacts.show');
    
    Route::fallback( function () {
    
        return "<h1>Sorry, the page does not exist</h1>" ;
    
    });
    
