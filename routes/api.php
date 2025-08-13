<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("/posts", [PostController::class, "index"]);
Route::post("/posts", [PostController::class, "store"]);
Route::put("/posts/{id}", [PostController::class, "update"]);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
