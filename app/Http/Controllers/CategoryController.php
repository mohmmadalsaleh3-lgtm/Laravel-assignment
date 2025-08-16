<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        return Category::create([
            "name" => $request->name,
            "description" => $request->description,
        ]);
    }

    public function update(Request $request, $id)
    {
        return Category::where('id', $id)->update([
            "name" => $request->name,
            "description" => $request->description,
        ]);
    }
    
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(null, 204);
    }
}