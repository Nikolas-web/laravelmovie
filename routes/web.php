<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardFilmsController;
use App\Http\Controllers\CastController;


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
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
    	'title' => 'About',
        'active' => 'about',
        'name' => 'nicholas',
        'email' => 'nikolas@gmail.com',
    ]);
});


Route::get('/film', function () {
    return view('film', [
        "title" => "List Film",
        "active" => 'Film'
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Category",
        "active" => 'Category'
    ]);
});


Route::get('/dashboard', function() {
    return view('dashboard.index');
});

// films


Route::get('/dashboard/films', [DashboardFilmsController::class, 'index']);


Route::get('/dashboard/films/show', function() {
    return view('dashboard.films.show', [
        "title" => "Movies",
        "active" => 'Movies'
    ]);
});

Route::get('/dashboard/films/create', function() {
    return view('dashboard.films.create', [
        "title" => "Movies",
        "active" => 'Movies'
    ]);
});

// casts
Route::get('/dashboard/casts', function() {
    return view('dashboard.casts.index', [
        "title" => "Movies",
        "active" => 'Movies'
    ]);
});

Route::get('/dashboard/casts/show', function() {
    return view('dashboard.casts.show', [
        "title" => "Movies",
        "active" => 'Movies'
    ]);
});

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);






// Route::resource('films', FilmController::class);
// Route::resource('casts', CastController::class);
// Route::resource('movies.comments', CommentController::class);

// Route::post('/films/{film:id}/cast_store')->name('film_cast_store');
// Route::delete('/films/{film:id}/casts/{cast:id}')->name('film_destroy_store');

// Route::get('/film', [FilmController::class, 'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
