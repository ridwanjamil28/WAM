<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create([
        'name' => $request->name,
        'slug' => Str::slug($request->name)
    ]);

         return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
{
    return view('admin.categories.edit', compact('category'));
}

public function update(Request $request, Category $category)
{
    $category->update([
        'name' => $request->name,
        'slug' => Str::slug($request->name)
    ]);

    return redirect()->route('categories.index');
}
    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Category $category)
{
    $category->delete();
    return back();
}
}
