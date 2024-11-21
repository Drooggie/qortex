<?php

namespace App\Http\Controllers;

use App\Http\Requests\Album\StoreRequest;
use App\Http\Requests\Album\UpdateRequest;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Resources\AlbumResource;
use Illuminate\Http\JsonResponse;

class AlbumController extends Controller
{
    public function index(): JsonResponse
    {
        $albums = Album::with(['songs' => function ($query) {
            $query->withPivot('track_number');
        }])->get();

        // Return a JSON response with paginated album data
        return response()->json([
            'data' => AlbumResource::collection($albums),
        ]);
    }

    public function store(StoreRequest $request): JsonResponse
    {
        $album_data = $request->validated();

        $songsWithTrackNumbers = [];
        foreach ($album_data['songs'] as $songData) {
            $songsWithTrackNumbers[$songData['id']] = ['track_number' => $songData['track_number']];
        }

        $album = Album::create([
            "title" => $album_data["title"],
            "release_year" => $album_data["release_year"],
            "artist_id" => $album_data["artist_id"]
        ]);

        $album->songs()->attach($songsWithTrackNumbers);

        return response()->json([
            "message" => "Album was added",
            "data" => new AlbumResource($album->load('songs')),
        ]);
    }

    public function update(UpdateRequest $request, Album $album): JsonResponse
    {
        $updated_album = $request->validated();

        $album->update([
            "title" => $updated_album["title"],
            "release_year" => $updated_album["release_year"],
        ]);

        $updatedSongsWithTrackNumbers = [];
        foreach ($updated_album['songs'] as $songData) {
            $updatedSongsWithTrackNumbers[$songData['id']] = ['track_number' => $songData['track_number']];
        }

        $album->songs()->sync($updatedSongsWithTrackNumbers);

        return response()->json([
            'message' => "You successfully updated album",
            "data" => new AlbumResource($album->load('songs'))
        ]);
    }

    public function show(Album $album): JsonResponse
    {
        $album_data = Album::where("id", $album->id)->with(['songs' => function ($query) {
            $query->withPivot('track_number');
        }])->get();

        return response()->json([
            'data' => AlbumResource::collection($album_data),
        ]);
    }

    public function destroy(Album $album): JsonResponse
    {
        $album->delete();

        return response()->json([
            "message" => "Album was deleted"
        ]);
    }
}
