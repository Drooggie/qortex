<?php

namespace App\Http\Controllers;

use App\Http\Requests\Album\StoreRequest;
use App\Http\Requests\Album\UpdateRequest;
use App\Http\Requests\Artist\UpdateRequest as ArtistUpdateRequest;
use App\Http\Requests\Song\UpdateRequest as SongUpdateRequest;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Resources\AlbumResource;
use Illuminate\Http\JsonResponse;

class AlbumController extends Controller
{
    public function index(): JsonResponse
    {
        $albums = Album::with('songs')->get();

        return response()->json([
            'data' => AlbumResource::collection($albums)
        ], 200);
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
            "data" => AlbumResource::collection($album),
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
            $songsWithTrackNumbers[$songData['id']] = ['track_number' => $songData['track_number']];
        }

        $album->songs()->sync($updatedSongsWithTrackNumbers);


        return response()->json([
            'message' => "You successfully updated album"
        ]);
    }

    public function show(Album $album): JsonResponse
    {
        $album_data = Album::where("id", $album->id)->with("songs")->get();

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
