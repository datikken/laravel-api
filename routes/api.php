<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetitionController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// all methods of the controller will appear
Route::apiResource('/petitions', PetitionController::class);
//->only([
//    'index',
//    'store'
//]);
