<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/* Route to display a list of all books */
Route::get('/books', [BookController::class, 'index'])->name('books.index');

/* Route to display a specific book by its ID */
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');