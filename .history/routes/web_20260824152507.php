<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/whoami', function () {
    return 'Kenart G. Aquino | 2023-70307 | Block 4C | ITRACKB4 Laravel 12';
});


Route::get('/books', [BookController::class, 'index']);