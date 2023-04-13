<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Http\Resources\Category as ResourcesCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return ResourcesCategory::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return new ResourcesCategory($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Category::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->update($request->all());
        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Category::destroy($id);
    }
}