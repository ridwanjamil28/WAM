<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
   public function index()
{
    $galleries = Gallery::latest()->get();
    return view('admin.galleries.index', compact('galleries'));
}

public function create()
{
    return view('admin.galleries.create');
}

public function store(Request $request)
{
    $path = $request->file('image')->store('galleries', 'public');

    Gallery::create([
        'title' => $request->title,
        'image' => $path
    ]);

    return redirect()->route('galleries.index')->with('success', 'Berhasil');
}

public function destroy(Gallery $gallery)
{
    $gallery->delete();
    return back();
}
}
