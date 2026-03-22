<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\ArticleController;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Admin\CategoryController;

    Route::get('/', [HomeController::class, 'index']);


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
    return redirect('/admin');
    })->name('dashboard');

});
// FRONTEND layanan
Route::get('/layanan', [ServiceController::class, 'list'])->name('layanan');
Route::get('/layanan/{slug}', [ServiceController::class, 'show'])->name('layanan.show');

// ADMIN layanan
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('services', ServiceController::class);
});
// FRONTEND portfolio
Route::get('/portfolio', [PortfolioController::class, 'list'])->name('portfolio');
// ADMIN portfolio
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('portfolio', PortfolioController::class);
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::get('/artikel', function (Request $request) {

    $query = Article::with('category')->latest();

    // 🔍 SEARCH
    if ($request->search) {
        $query->where('title','like','%'.$request->search.'%')
              ->orWhere('excerpt','like','%'.$request->search.'%');
    }

    // 🏷 FILTER CATEGORY
    if ($request->category) {
        $query->whereHas('category', function($q) use ($request){
            $q->where('slug', $request->category);
        });
    }

    $articles = $query->paginate(6);

    // 🔥 STEP 9 butuh ini juga
    $categories = Category::all();

    return view('artikel.index', compact('articles','categories'));
});

Route::get('/artikel/{slug}', function ($slug) {

    $article = Article::with('category')
        ->where('slug', $slug)
        ->firstOrFail();

    // 🔥 ambil kategori
    $categories = Category::all();

    // 🔥 artikel terbaru
    $latest = Article::latest()->take(3)->get();

    return view('artikel.show', compact('article', 'categories', 'latest'));
});

Route::prefix('admin')->group(function () {
    Route::resource('articles', ArticleController::class);
});
Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
});

require __DIR__.'/auth.php';
