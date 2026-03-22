<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;



class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->take(6)->get();
        $portfolios = Portfolio::latest()->take(3)->get();
     

        return view('home.index', compact(
            'services',
            'portfolios'
        ));
    }
}