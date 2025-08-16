<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
$posts=Post::all();
 return response()->json($posts, 200);       }

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
         public function destroy($id){
        $posts=Post::findorfail($id);
         $posts->delete();
 return response()->json(null, 204);   
 }
}
