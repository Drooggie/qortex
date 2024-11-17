<?php

use App\Http\Controllers\AlbumContoller;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::Resource('artists', ArtistController::class);
Route::Resource('albums', AlbumContoller::class);
Route::Resource('songs', SongController::class);
