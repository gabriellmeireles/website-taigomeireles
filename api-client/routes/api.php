<?php

use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\SeriesController;
use App\Http\Controllers\Api\WorkController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/artists', ArtistController::class);

Route::apiResource('/series', SeriesController::class);

Route::apiResource('/works', WorkController::class);


