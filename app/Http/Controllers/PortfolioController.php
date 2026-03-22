<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $portfolios = Portfolio::all();

    return view('portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->validate([
        'judul' => 'required',
        'deskripsi' => 'nullable',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {

        $file = $request->file('gambar');

        $filename = time().'.'.$file->getClientOriginalExtension();

        $file->move(public_path('images'), $filename);

        $data['gambar'] = $filename;

        }

        Portfolio::create($data);

        return redirect()->route('portfolio.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $portfolio = Portfolio::findOrFail($id);

    return view('portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{

$portfolio = Portfolio::findOrFail($id);

$data = $request->validate([
'judul' => 'required',
'deskripsi' => 'nullable',
'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
]);

if ($request->hasFile('gambar')) {

$file = $request->file('gambar');

$filename = time().'.'.$file->getClientOriginalExtension();

$file->move(public_path('images'), $filename);

$data['gambar'] = $filename;

}

$portfolio->update($data);

return redirect()->route('portfolio.index');

}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $portfolio->delete();

        return redirect()->route('portfolio.index');
    }

       public function list()
{
    $portfolios = Portfolio::latest()->get();
      return view('frontend.portfolio.index', compact('portfolios'));
}
}
