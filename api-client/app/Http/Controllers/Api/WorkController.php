<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Works\StoreWorkRequest;
use App\Http\Requests\Works\UpdateWorkRequest;
use App\Http\Resources\WorkResource;
use App\Models\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Work::paginate();
        return WorkResource::collection($works);
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
    public function store(StoreWorkRequest $request)
    {
        $work = Work::create($request->validated());

        return response()->json([
            'message' => trans('messages.success.create', ['value' => strtoupper($work->title)]),
            'work' => $work
        ],201);
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        return new WorkResource($work);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkRequest $request, Work $work)
    {
        $work->update($request->validated());

        return response()->json([
            'message' => trans('messages.success.update', ['value' => strtoupper($work->title)]),
            'work' => $work
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        $work->delete();
        return response()->json([
           'message' => trans('messages.success.delete', ['value' => strtoupper($work->title)]),
        ]);
    }
}
