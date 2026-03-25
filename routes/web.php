<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\GalleryController;

use App\Models\Article;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index']);

// Layanan
Route::get('/layanan', [ServiceController::class, 'list'])->name('layanan');
Route::get('/layanan/{slug}', [ServiceController::class, 'show'])->name('layanan.show');

// Portfolio
Route::get('/portfolio', [PortfolioController::class, 'list'])->name('portfolio');

// Tentang
Route::get('/tentang', function () {
    return view('frontend.about.index');
});

// Artikel List + Filter + Search
Route::get('/artikel', function (Request $request) {

    $query = Article::with('category')->latest();

    // Search
    if ($request->search) {
        $query->where('title', 'like', '%' . $request->search . '%')
              ->orWhere('excerpt', 'like', '%' . $request->search . '%');
    }

    // Filter category
    if ($request->category) {
        $query->whereHas('category', function ($q) use ($request) {
            $q->where('slug', $request->category);
        });
    }

    $articles = $query->paginate(6);
    $categories = Category::all();

    return view('artikel.index', compact('articles', 'categories'));
});

// Artikel Detail
Route::get('/artikel/{slug}', function ($slug) {

    $article = Article::with('category')
        ->where('slug', $slug)
        ->firstOrFail();

    $categories = Category::all();
    $latest = Article::latest()->take(3)->get();

    return view('artikel.show', compact('article', 'categories', 'latest'));
});

/*
|--------------------------------------------------------------------------
| AUTH & DASHBOARD REDIRECT
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return redirect('/admin');
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Services
    Route::resource('services', ServiceController::class);

    // Portfolio
    Route::resource('portfolio', PortfolioController::class);

    // Articles
    Route::resource('articles', ArticleController::class);

    // Categories
    Route::resource('categories', CategoryController::class);

    // Settings
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');

    // Pricing
    Route::resource('pricings', PricingController::class);

    // Clients
    Route::resource('clients', ClientController::class);

    // Galleries
    Route::resource('galleries', GalleryController::class);
});

require __DIR__.'/auth.php';