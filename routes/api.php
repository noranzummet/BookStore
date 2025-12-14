<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Author\BookController;



Route::prefix('authors/{author_id}')->group(function () {
    Route::get('books', [BookController::class, 'index']);
    Route::post('books', [BookController::class, 'store']);
    Route::get('books/{book_id}', [BookController::class, 'show']);
    Route::put('books/{book_id}', [BookController::class, 'update']);
    Route::delete('books/{book_id}', [BookController::class, 'destroy']);
});


