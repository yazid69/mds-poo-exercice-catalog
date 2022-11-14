<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    public function list()
    {
        //$movie = Movie::limit()->get(20);
        Paginator::useBootstrap();
        $movies = Movie::paginate(20);
        return view('movies', ['movies' => $movies]);
    }

    public function show(Movie $movie, $id)
    {

        $movie = Movie::find($id);

        return view('movie', ['movie' => $movie]);
    }
}
