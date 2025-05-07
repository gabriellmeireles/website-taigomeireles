<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Artists\StoreArtistRequest;
use App\Http\Requests\Artists\UpdateArtistRequest;
use App\Http\Resources\ArtistResource;
use App\Models\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::paginate();
        return ArtistResource::collection($artists);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtistRequest $request)
    {
        $artist = Artist::create($request->validated());

        return response()->json([
            'message' => "Artista $artist->artist_name criado com sucesso!",
            'artist' => new ArtistResource($artist)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return new ArtistResource($artist);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtistRequest $request, Artist $artist)
    {
        $artist->update($request->validated());
        return response()->json([
            'message' => "Artista $artist->artist_name atualizado com sucesso!",
            'artist' => $artist
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return response()->json([
            'message' => "Artista $artist->artist_name foi deletado com sucesso",
        ]);
    }
}
