<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $services = Service::all();
            return view('services.index', compact('services'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);
        $data['slug'] = Str::slug($request->nama); // 🔥 INI WAJIB

        if($request->hasFile('gambar')){

        $file = $request->file('gambar');

        $filename = time().'.'.$file->getClientOriginalExtension();

        $file->move(public_path('images'), $filename);

        $data['gambar'] = $filename;

}

Service::create($data);

return redirect()->route('services.index');


    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
{
    $service = Service::where('slug', $slug)->firstOrFail();

    return view('services.show', compact('service'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $service = Service::findOrFail($id);

    return view('services.edit', compact('service'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{

            $service = Service::findOrFail($id);

            $data = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
            ]);
            $data['slug'] = Str::slug($request->nama);

            if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');

            $filename = time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('images'), $filename);

            $data['gambar'] = $filename;

            }

            $service->update($data);

            return redirect()->route('services.index');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $service = Service::findOrFail($id);

    $service->delete();

    return redirect()->route('services.index');
}
public function list(Request $request)
{
    $search = $request->search;

    $services = Service::when($search, function ($query, $search) {
        return $query->where('nama', 'like', '%' . $search . '%');
    })->latest()->paginate(6);

    return view('frontend.services.index', compact('services'));
}
}
