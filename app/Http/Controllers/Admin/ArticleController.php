<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $articles = Article::latest()->get(); // ambil data

        return view('admin.articles.index', compact('articles')); // kirim ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $categories = \App\Models\Category::all();
return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = null;

    if ($request->hasFile('image')) {
        $image = $request->file('image')->store('articles', 'public');
    }

    Article::create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'excerpt' => $request->excerpt,
        'content' => $request->content,
        'image' => $image,
        'category_id' => $request->category_id
        
    ]);

    return redirect()->route('articles.index');
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
    public function edit(Article $article)
    {
        $categories = \App\Models\Category::all();
        
return view('admin.articles.edit', compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
{
    $image = $article->image;

    if ($request->hasFile('image')) {
        $image = $request->file('image')->store('articles', 'public');
    }

    $article->update([
        'title' => $request->title,
        'slug' => \Illuminate\Support\Str::slug($request->title),
        'excerpt' => $request->excerpt,
        'content' => $request->content,
        'image' => $image,
        'category_id' => $request->category_id,
    ]);

    return redirect()->route('articles.index');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Article $article)
{
    if ($article->image) {
        \Storage::delete('public/'.$article->image);
    }

    $article->delete();

    return back();
}
}
