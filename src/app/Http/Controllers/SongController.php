<?php

namespace App\Http\Controllers;

use App\Http\Requests\Song\UpdateRequest;
use App\Http\Requests\Song\StoreRequest;
use App\Http\Resources\SongResource;
use App\Models\Song;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SongController extends Controller
{

    public function index()
    {
        $songs = Song::all();

        return SongResource::collection($songs);
    }

    public function store(StoreRequest $request): JsonResponse
    {
        $song_data = $request->validated();

        $song = Song::create($song_data);

        return response()->json([
            'message' => 'Song added',
            "data" => new SongResource($song),
        ]);
    }

    public function update(UpdateRequest $request, Song $song): JsonResponse
    {
        $updated_song = $request->validated();

        $song->update($updated_song);
        $song->save();

        return response()->json([
            'message' => 'Song info was updated',
            'data' => new SongResource($song),
        ]);
    }

    public function show(Song $song): Object
    {
        $song_data = Song::findOrFail($song->id);

        return new SongResource($song_data);
    }

    public function destroy(Song $song): JsonResponse
    {
        $song->delete();
        return response()->json([
            'message' => 'Song was deleted'
        ]);
    }
}
