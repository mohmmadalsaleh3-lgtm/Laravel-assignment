<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Load Function:
    // $posts = Post::all();
    // $posts->load(["user"]);
    // foreach ($posts as $post) {
    //     echo "User: {$post->user->name} Post: {$post->title} <br/>";
    // }

    // With function:
    // $posts = Post::with(["user"])->get();
    // foreach ($posts as $post) {
    //     echo "User: {$post->user->name} Post: {$post->title} <br/>";
    // }

    // lazy loading (n+1 problem)
    $posts = Post::all();
    foreach ($posts as $post) {
        echo "User: {$post->user->name} Post: {$post->title} <br/>";
    }

    //->pluck('content');
    // return view('welcome');
});
