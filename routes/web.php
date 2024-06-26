<?php

use Illuminate\Support\Facades\Route;


function getContacts() {

 return [
    1 => ['id' => 1, 'name' => 'Name 1', 'phone' => '1234567890'],

    2 => ['id' => 2, 'name' => 'Name 2', 'phone' => '2345678901'],
    
    3 => ['id' => 3, 'name' => 'Name 3', 'phone' => '3456789012'],
];

}


Route::get('/', function () {
    
    return view('welcome');

});
    
    Route::get('/contacts', function () {
    
        $companies = [
            1 => ['name' => 'Company One', 'contacts' => 3],

            2 => ['name' => 'Company Two', 'contacts' => 5],
        ];

        $contacts = getContacts();

        return view('contacts.index', compact('contacts', 'companies'));
    
    })->name('contacts.index');


    
    Route::get('/contacts/create', function () {
    
        return view('contacts.create');
    
    })->name('contacts.create');
    
    Route::get('/contacts/{id}', function ($id) {

        $contacts = getContacts();    
        abort_unless(isset($contacts[$id]), 404);
        $contact = $contacts[$id];
        
        return view('contacts.show')->with('contact', $contact);
    
    })->name('contacts.show');
    
    Route::fallback( function () {
    
        return "<h1>Sorry, the page does not exist</h1>" ;
    
    });
    
