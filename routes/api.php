<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\AuthorController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/petitions', PetitionController::class);
Route::apiResource('/authors', AuthorController::class)
->only([
    'index',
    'show'
]);
