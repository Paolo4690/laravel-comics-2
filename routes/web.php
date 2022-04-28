<?php

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
    $data = [
        'books' => config('comics'),
        'arrSectionBlu' => config('myArr.sectionBlu')
    ];
    return view('home', $data);
})->name('home');



Route::get('/comics', function () {
    $data = [
        'books' => config('comics'),
        'arrSectionBlu' => config('myArr.sectionBlu')
    ];
    return view('comics', $data);
})->name('comics');



Route::get('/characters', function () {
    $data = [
        'books' => config('comics'),
        'arrSectionBlu' => config('myArr.sectionBlu')
    ];
    return view('characters', $data);
})->name('characters');



Route::get('/movies', function () {
    $data = [
        'books' => config('comics'),
        'arrSectionBlu' => config('myArr.sectionBlu')
    ];
    return view('movies', $data);
})->name('movies');



Route::get('/tv', function () {
    $data = [
        'books' => config('comics'),
        'arrSectionBlu' => config('myArr.sectionBlu')
    ];
    return view('tv', $data);
})->name('tv');



Route::get('/games', function () {
    $data = [
        'books' => config('comics'),
        'arrSectionBlu' => config('myArr.sectionBlu')
    ];
    return view('games', $data);
})->name('games');



Route::get('/collectibles', function () {
    $data = [
        'books' => config('comics'),
        'arrSectionBlu' => config('myArr.sectionBlu')
    ];
    return view('collectibles', $data);
})->name('collectibles');



Route::get('/single_comics/{id}', function ($id) {
    $selectBook = collect(config('comics'))->firstWhere('id', $id);
    if ($selectBook === null) {
        abort(404);
    }
    $data = [
        'selectBook' => $selectBook,
    ];
    return view('single_comics', $data);
})->name('single_comics');
