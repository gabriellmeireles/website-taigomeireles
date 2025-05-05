<?php

use App\Http\Controllers\Api\ArtistsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/artists', [ArtistsController::class, 'index']);
