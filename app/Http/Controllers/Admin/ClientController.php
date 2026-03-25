<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
{
    $clients = Client::latest()->get();
    return view('admin.clients.index', compact('clients'));
}

public function create()
{
    return view('admin.clients.create');
}

public function store(Request $request)
{
    $path = $request->file('logo')->store('clients', 'public');

    Client::create([
        'name' => $request->name,
        'logo' => $path
    ]);

    return redirect()->route('clients.index')->with('success', 'Berhasil');
}

public function destroy(Client $client)
{
    $client->delete();
    return back();
}
}
