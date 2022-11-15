<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $movies = Movie::inRandomOrder()->whereNotNull('poster')->limit(12)->get();

    return view('home', ['movies' => $movies]);
});

Route::get('/movies/{id}', [MovieController::class, 'show'])->name('show.movie');

//return view('show_movie', ['movie' => $movie]);

Route::get('/movies', [MovieController::class, 'list'])->name('list.movies');
Route::get('/movie/random', [MovieController::class, 'random'])->name('random.movie');;

Route::get('/genres', [GenreController::class, 'list'])->name('list.genres');;
