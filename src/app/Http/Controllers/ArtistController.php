<?php

namespace App\Http\Controllers;

use App\Http\Requests\Artist\StoreRequest;
use App\Http\Requests\Artist\UpdateRequest;
use App\Http\Resources\ArtistResource;
use App\Models\Artist;
use Illuminate\Http\JsonResponse;

class ArtistController extends Controller
{

    public function index()
    {
        $artist = Artist::all();

        return ArtistResource::collection($artist);
    }

    public function store(StoreRequest $request): JsonResponse
    {
        $artist_data = $request->validated();
        $artist = Artist::create($artist_data);

        return response()->json([
            'message' => 'Artist created',
            "data" => new ArtistResource($artist)
        ]);
    }

    public function update(UpdateRequest $request, Artist $artist): JsonResponse
    {
        $updated_artist = $request->validated();

        $artist->update($updated_artist);

        return response()->json([
            'message' => 'Artist info updated',
            "data" => new ArtistResource($artist)
        ]);
    }

    public function show(Artist $artist): Object
    {
        $artist_data = Artist::findOrFail($artist->id);

        return $artist_data;
    }

    public function destroy(Artist $artist): JsonResponse
    {
        $artist->delete();
        return response()->json([
            'message' => 'You deleted artist information'
        ]);
    }
}
