<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = User::find(1);
    return $user->load(["posts", "posts.comments"]);//->pluck('content');
    // return view('welcome');
});
