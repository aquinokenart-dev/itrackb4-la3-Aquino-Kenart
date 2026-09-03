<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/whoami', function () {
    return 'Kenart G. Aquino | 2023-70307 | Block 4C | ITRACKB4 Laravel 12';
});

Route::get('/movies', [MovieController::class, 'index'])
    ->name('movies.index');

Route::get('/movies/featured', [MovieController::class, 'featured'])
    ->name('movies.featured');

Route::get('/movies/filter/{genre?}', [MovieController::class, 'filter'])
    ->name('movies.filter');

Route::get('/movies/{id}', [MovieController::class, 'show'])
    ->name('movies.show');