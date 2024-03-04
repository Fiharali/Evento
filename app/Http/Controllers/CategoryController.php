<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('Admin.category.index',compact('categories'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
       Category::create($request->all());
       return redirect()->back()->with(['success' =>' category add successful']);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

         $category->update($request->all());
         return redirect()->back()->with(['success' =>' category updated successful']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with(['success' =>' category deleted successful']);
    }
}
