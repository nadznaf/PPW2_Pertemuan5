<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('buku', [BooksController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


