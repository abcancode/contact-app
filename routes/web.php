<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('welcome');

});
    
    Route::get('/contacts', function () {
    
        $contacts = [
            1 => ['name' => 'Name 1', 'phone' => '1234567890'],

            2 => ['name' => 'Name 2', 'phone' => '2345678901'],

            3 => ['name' => 'Name 3', 'phone' => '3456789012'],
        ];

        return view('contacts.index', compact('contacts'));
    
    })->name('contacts.index');


    
    Route::get('/contacts/create', function () {
    
        return view('contacts.create');
    
    })->name('contacts.create');
    
    Route::get('/contacts/{id}', function ($id) {
    
        return "Contact " . $id ;
    
    })->name('contacts.show');
    
    Route::fallback( function () {
    
        return "<h1>Sorry, the page does not exist</h1>" ;
    
    });
    
