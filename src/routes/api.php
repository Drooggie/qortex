<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::Resource('artists', ArtistController::class);
Route::Resource('albums', AlbumController::class);
Route::Resource('songs', SongController::class);
