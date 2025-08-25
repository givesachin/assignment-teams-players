<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

Route::apiResource('teams', TeamController::class);
Route::post('teams/update-all', [TeamController::class, 'updateAll']);
Route::apiResource('players', PlayerController::class);
