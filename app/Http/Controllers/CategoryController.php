<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

   public function store(StoreCategoryRequest $request)
{
    return Category::create($request->validated());
}



   public function update(UpdateCategoryRequest $request, $id)
{
    $category = Category::findOrFail($id);
    $category->update($request->validated());
    return response()->json($category, 200);
}

    
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(null, 204);
    }
}