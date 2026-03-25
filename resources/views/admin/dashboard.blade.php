@extends('layouts.admin')

@section('content')

<h2 class="mb-4 fw-bold">Dashboard Admin</h2>

<div class="row g-4">

    <!-- LAYANAN -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-success text-white rounded-4">
            <div class="card-body d-flex align-items-center justify-content-between">

                <div>
                    <h6 class="mb-1">Total Layanan</h6>
                    <h2 class="fw-bold">{{ $totalServices ?? \App\Models\Service::count() }}</h2>
                </div>

                <div class="fs-1 opacity-75">
                    🛠️
                </div>

            </div>
        </div>
    </div>

    <!-- ARTIKEL -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-primary text-white rounded-4">
            <div class="card-body d-flex align-items-center justify-content-between">

                <div>
                    <h6 class="mb-1">Total Artikel</h6>
                    <h2 class="fw-bold">{{ $totalArticles ?? \App\Models\Article::count() }}</h2>
                </div>

                <div class="fs-1 opacity-75">
                    📰
                </div>

            </div>
        </div>
    </div>

    <!-- PORTFOLIO -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-dark text-white rounded-4">
            <div class="card-body d-flex align-items-center justify-content-between">

                <div>
                    <h6 class="mb-1">Total Portfolio</h6>
                    <h2 class="fw-bold">{{ $totalPortfolios ?? \App\Models\Portfolio::count() }}</h2>
                </div>

                <div class="fs-1 opacity-75">
                    📁
                </div>

            </div>
        </div>
    </div>

    <!-- CLIENT -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-warning text-white rounded-4">
            <div class="card-body d-flex align-items-center justify-content-between">

                <div>
                    <h6 class="mb-1">Total Client</h6>
                    <h2 class="fw-bold">{{ $totalClients ?? \App\Models\Client::count() }}</h2>
                </div>

                <div class="fs-1 opacity-75">
                    👥
                </div>

            </div>
        </div>
    </div>

    <!-- GALERI -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm bg-info text-white rounded-4">
            <div class="card-body d-flex align-items-center justify-content-between">

                <div>
                    <h6 class="mb-1">Total Galeri</h6>
                    <h2 class="fw-bold">{{ $totalGalleries ?? \App\Models\Gallery::count() }}</h2>
                </div>

                <div class="fs-1 opacity-75">
                    🖼️
                </div>

            </div>
        </div>
    </div>

</div>

@endsection