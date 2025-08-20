<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Models\User;

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index']);        
    Route::post('/', [PostController::class, 'store']);       
    Route::put('/{id}', [PostController::class, 'update']);  
    Route::delete('/{id}', [PostController::class, 'destroy']); 
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);        
    Route::post('/', [UserController::class, 'store']);       
    Route::put('/{id}', [UserController::class, 'update']);   
    Route::delete('/{id}', [UserController::class, 'destroy']); 
});


Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);      
    Route::post('/', [CategoryController::class, 'store']);    
    Route::put('/{id}', [CategoryController::class, 'update']); 
    Route::delete('/{id}', [CategoryController::class, 'destroy']); 
});