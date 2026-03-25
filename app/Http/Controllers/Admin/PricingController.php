<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pricing;
use App\Models\PricingItem;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::latest()->get();
        return view('admin.pricings.index', compact('pricings'));
    }

    public function create()
    {
        return view('admin.pricings.create');
    }

    public function store(Request $request)
    {
        $pricing = Pricing::create([
            'title' => $request->title,
            'price' => $request->price,
            'is_popular' => $request->has('is_popular'),
        ]);

        $this->saveItems($pricing, $request);

        return redirect()->route('pricings.index')->with('success', 'Berhasil ditambahkan');
    }

    public function edit(Pricing $pricing)
    {
        $pricing->load('items');
        return view('admin.pricings.edit', compact('pricing'));
    }

    public function update(Request $request, Pricing $pricing)
    {
        $pricing->update([
            'title' => $request->title,
            'price' => $request->price,
            'is_popular' => $request->has('is_popular'),
        ]);

        // hapus item lama
        $pricing->items()->delete();

        $this->saveItems($pricing, $request);

        return redirect()->route('pricings.index')->with('success', 'Berhasil diupdate');
    }

    public function destroy(Pricing $pricing)
    {
        $pricing->delete();
        return back()->with('success', 'Berhasil dihapus');
    }

    private function saveItems($pricing, $request)
    {
        // pekerjaan
        if ($request->pekerjaan) {
            foreach ($request->pekerjaan as $item) {
                if ($item) {
                    $pricing->items()->create([
                        'item' => $item,
                        'type' => 'pekerjaan'
                    ]);
                }
            }
        }

        // syarat
        if ($request->syarat) {
            foreach ($request->syarat as $item) {
                if ($item) {
                    $pricing->items()->create([
                        'item' => $item,
                        'type' => 'syarat'
                    ]);
                }
            }
        }
    }
}
