<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
         public function index()
{
    $movies = [
        ['name' => 'Keyboard', 'price' => 1200, 'stock' => 10],
        ['name' => 'Mouse', 'price' => 500, 'stock' => 18],
        ['name' => 'Laptop', 'price' => 20,000, 'stock' => 9],
        ['name' => 'Type C Charger', 'price' => 300, 'stock' => 38],
        ['name' => 'Type B Charger', 'price' => 310, 'stock' => 20],
    ];
 
    return view('movies.index', ['movies' => $movies]);
}
}
