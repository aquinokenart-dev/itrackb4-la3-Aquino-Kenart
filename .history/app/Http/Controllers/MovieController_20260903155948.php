<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index', ['movies' => $this->movies()]);
    }
    public function show($id){
        $movies = $this->movies();
        if (!isset($movies[$id])) {
            abort(404);
        }
        return view('movies.show', ['movie' => $movies[$id]]);
    }
    public function filter($genre = null){
        $movies = $this->movies();
        if ($genre) {
            
            $movies = array_filter($movies, function ($movie) use ($genre) {
                return $movie['genre'] === $genre;
            });
        }

        return view('movies.filter', ['movies' => $movies,'activeGenre' => $genre]);
    }

    private function movies()
    {
        return [
            1 => ['id' => 1,'title' => 'Spider-Man','price' => 250,'genre' => 'Action','rating' => 9.1,'year' => 2002],
            2 => ['id' => 2,'title' => 'Gagamboy','price' => 200,'genre' => 'Comedy','rating' => 8.5,'year' => 2004],
            3 => ['id' => 3,'title' => 'Harry Potter','price' => 300,'genre' => 'Fantasy','rating' => 9.7,'year' => 2001],
            4 => ['id' => 4,'title' => 'Grown Ups','price' => 250,'genre' => 'Comedy','rating' => 8.6,'year' => 2010],
            5 => ['id' => 5,'title' => 'Grown Ups 2','price' => 250,'genre' => 'Comedy','rating' => 8.9,'year' => 2013],
            6 => ['id' => 6,'title' => 'Avengers: Endgame','price' => 350,'genre' => 'Action','rating' => 9.8,'year' => 2019],

        ];
    }
}