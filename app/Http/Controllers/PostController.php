<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
class PostController extends Controller
{
   public function index()
{
    $posts = Post::with(['categories'])->get();
    return response()->json($posts, 200);
}
  public function store(StorePostRequest $request)
{
    $post = Post::create($request->validated());
    $post->categories()->sync($request->category_ids);
    return response()->json($post, 201);
}


    public function update(UpdatePostRequest $request, $id)
{
    $post = Post::findOrFail($id);
    $post->update($request->validated());
    if ($request->has('category_ids')) {
        $post->categories()->sync($request->category_ids);
    }
    return response()->json($post, 200);
}

         public function destroy($id){
        $posts=Post::findorfail($id);
         $posts->delete();
         return response()->json(null, 204);   
 }
}