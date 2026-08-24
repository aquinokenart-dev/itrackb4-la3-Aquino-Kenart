<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/whoami', function () {
    return 'Kenart G. Aquino | 2023-70307 | Block 4C | ITRACKB4 Laravel 12';
});
