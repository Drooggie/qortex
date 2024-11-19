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

        return response()->json([
            'message' => 'Song added'
        ]);
    }

    public function update(UpdateRequest $request, Song $song)
    {
        $updated_song = $request->validated();
        $song->update($updated_song);
        Song::make([$song]);

        return response()->json([
            'message' => 'Song info was updated'
        ]);
    }

    public function show(Song $song)
    {
        return Song::where('id', $song->id)->get();
    }

    public function destroy(Song $song)
    {
        $song->delete();
        return response()->json([
            'message' => 'Song was deleted'
        ]);
    }
}
