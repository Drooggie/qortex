<?php

namespace App\Http\Controllers;

use App\Http\Requests\Song\UpdateRequest;
use App\Http\Requests\Song\StoreRequest;
use App\Http\Resources\SongResource;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{

    public function index()
    {
        $song = Song::all();

        return SongResource::collection($song);
    }

    public function store(StoreRequest $request)
    {
        $song = $request->validated();

        Song::create($song);
    }

    public function update(UpdateRequest $request)
    {
        return;
    }
}
