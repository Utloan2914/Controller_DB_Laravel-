<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateTableControllerDB;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-tables', [CreateTableControllerDB::class, 'createAllTables']);