<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
Route::get('/', function () {
    return view('layouts');



/*Route::prefix('/books')->group(function () {
    Route::resource('', BookController::class);  // Use resource routes for CRUD operations
*/
    // Additional named routes for specific actions if needed
    Route::get('/search', [BookController::class, 'search'])->name('books.search');
});