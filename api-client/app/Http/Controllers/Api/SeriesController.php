<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Series\StoreSeriesRequest;
use App\Http\Requests\Series\UpdateSeriesRequest;
use App\Http\Resources\SeriesResource;
use App\Models\Series;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $series = Series::paginate();
       return SeriesResource::collection($series);
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
    public function store(StoreSeriesRequest $request)
    {
        $series = Series::create($request->validated());

        return response()->json([
            'message' => "Series $series->title criada com sucesso!",
            'series' => new SeriesResource($series)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Series $series)
    {
        return new SeriesResource($series);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Series $series)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeriesRequest $request, Series $series)
    {
        $series->update($request->validated());
        return response()->json([
            'message' => "Serie $series->title atualizada com sucesso!",
            'series' => $series
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Series $series)
    {
        $series->delete();
        return response()->json([
            'message' => "Serie $series->title deletada com sucesso",
        ]);
    }
}
