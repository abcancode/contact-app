<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    return "<h1>All contacts are here</h1>";
});

Route::get('/contacts/create', function () {
    return "<h1>Add new contact</h1>";
});