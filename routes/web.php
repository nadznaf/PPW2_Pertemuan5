<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('buku', [BooksController::class, 'index'])->name('buku.view');
Route::get('buku/create', [BooksController::class, 'create'])->name('buku.create');
Route::post('buku', [BooksController::class, 'store'])->name('buku.store');
Route::delete('buku/delete/{id}', [BooksController::class, 'destroy'])->name('buku.destroy');
Route::get('buku/edit/{id}', [BooksController::class, 'edit'])->name('buku.edit');
Route::put('buku/{id}', [BooksController::class, 'update'])->name('buku.update');

Route::get('/', function () {
    return view('welcome');
});


