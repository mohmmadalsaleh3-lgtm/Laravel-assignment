<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::orderBy("created_at", "desc")->get();
    }

    public function store(Request $request)
    {
        return Post::create([
            "title" => $request->title,
            "content" => $request->content,
            "user_id" => $request->user_id,
        ]);
    }

    public function update(Request $request, $id)
    {
        return Post::where('id', $id)->update([
            "title" => $request->title,
            "content" => $request->content,
            "user_id" => $request->user_id,
        ]);
    }
}
