<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Models\User;

Route::get("/posts", [PostController::class, "index"]);
Route::post("/posts", [PostController::class, "store"]);
Route::put("/posts/{id}", [PostController::class, "update"]);
Route::Delete("/posts/{id}", [PostController::class, "destroy"]);  

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('users',[UserController::class,'index']);
Route::post("/users", [UserController::class, "store"]);
Route::put("/users/{id}", [UserController::class, "update"]);
Route::Delete("/users/{id}", [UserController::class, "destroy"]);  

Route::get("/categories", [CategoryController::class, "index"]);
Route::post("/categories", [CategoryController::class, "store"]);
Route::put("/categories/{id}", [CategoryController::class, "update"]);
Route::delete("/categories/{id}", [CategoryController::class, "destroy"]);