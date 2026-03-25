<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Article;
use App\Models\Portfolio;
use App\Models\Client;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalServices' => Service::count(),
            'totalArticles' => Article::count(),
            'totalPortfolios' => Portfolio::count(),
            'totalClients' => Client::count(),
            'totalGalleries' => Gallery::count(),
        ]);
    }
}