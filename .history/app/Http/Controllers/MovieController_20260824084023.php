<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
     public function index()
{
    $movies = [
        ['title' => 'Spiderman', 'genre' => 'Action', 'rating' => 9.1],
        ['title' => 'Gagamboy', 'genre' => 'Comedy', 'rating' => 8.5],
        ['title' => 'Harry Potter', 'genre' => 'Drama', 'rating' => 9.7],
        ['title' => 'Grown Ups', 'genre' => 'Comedy', 'rating' => 8.6],
        ['title' => 'Grown Ups 2', 'genre' => 'Comedy', 'rating' => 8.9],
    ];
 
    return view('movies.index', ['movies' => $movies]);
}
}
