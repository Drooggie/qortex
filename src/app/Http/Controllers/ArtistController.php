<?php

namespace App\Http\Controllers;

use App\Http\Requests\Artist\StoreRequest;
use App\Http\Requests\Artist\UpdateRequest;
use App\Http\Resources\ArtistResource;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{

    public function index(Request $request)
    {
        $artist = Artist::all();

        return ArtistResource::collection($artist);
    }

    public function store(StoreRequest $request)
    {
        $artist = $request->validated();
        Artist::create($artist);

        return response()->json([
            'message' => 'Artist created'
        ]);
    }

    public function update(UpdateRequest $request, Artist $artist)
    {
        $updated_artist = $request->validated();
        $artist->update($updated_artist);
        Artist::make([$artist]);

        return response()->json([
            'message' => 'Artist info updated'
        ]);
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();
        return response()->json([
            'message' => 'Information Deleted'
        ]);
    }
}
