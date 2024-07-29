<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('books');
});

Route::post('/books', [BooksController::class, 'store'])->name('books.store');