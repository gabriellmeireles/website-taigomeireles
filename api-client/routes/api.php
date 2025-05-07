<?php

use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\SeriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/artists', ArtistController::class);

Route::apiResource('/series', SeriesController::class);


