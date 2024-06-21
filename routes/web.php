<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = "
    
    <h1>Contact App</h1>

    <div>

    <a href='" .  route('contacts.index')  .  "'>All contacts</a>

    <a href='" .  route('contacts.create')  .  "'>Add contact</a>

    <a href='/contacts/1'>Show contact</a>

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

Route::get('/companies/{name?}', function ($name = null) {

    if ($name){

        return "Company " .  $name ;

    } else {

        return "All companies"; 
    }
  

})->whereAlpha('name');