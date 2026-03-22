@extends('layouts.website')
@php use Illuminate\Support\Str; @endphp

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-green-600 to-green-800 py-20 text-white text-center">
<div class="max-w-4xl mx-auto px-6">

<h1 class="text-4xl md:text-5xl font-bold mb-4">
Artikel & Insight
</h1>

<p class="text-lg text-green-100">
Informasi seputar perizinan bangunan, regulasi, dan tips profesional
</p>

</div>
</section>

<!-- CONTENT -->
<section class="py-24 bg-gray-50">

<div class="max-w-7xl mx-auto px-6">

<h2 class="text-3xl font-bold mb-12 text-center">
Artikel & Informasi
</h2>

<!-- SEARCH -->
<div class="max-w-2xl mx-auto mb-16">

<form method="GET" action="/artikel">

<div class="flex items-center bg-white rounded-2xl shadow-lg overflow-hidden">

<span class="px-4 text-gray-400">🔍</span>

<input type="text" name="search"
value="{{ request('search') }}"
placeholder="Cari artikel..."
class="w-full py-4 focus:outline-none">

<button class="bg-green-600 hover:bg-green-700 text-white px-6 py-4 font-semibold">
Cari
</button>

</div>

</form>

</div>
<div class="flex flex-wrap gap-3 justify-center mb-10">

<a href="/artikel"
class="px-4 py-2 rounded-full bg-gray-200">
Semua
</a>

@foreach($categories as $cat)
<a href="/artikel?category={{ $cat->slug }}"
class="px-4 py-2 rounded-full bg-gray-100 hover:bg-green-600 hover:text-white transition">
{{ $cat->name }}
</a>
@endforeach

</div>

<!-- RESULT INFO -->
@if(request('search'))
<p class="text-sm text-gray-500 mb-6 text-center">
Hasil pencarian untuk 
<span class="font-semibold text-green-600">
"{{ request('search') }}"
</span>
</p>
@endif

<!-- GRID -->
<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

@forelse($articles as $article)

<div class="bg-white rounded-2xl shadow-soft overflow-hidden hover-lift group">

<div class="overflow-hidden">
<img src="{{ asset('storage/'.$article->image) }}"
class="w-full h-52 object-cover group-hover:scale-105 transition duration-500">
</div>

<div class="p-6">
<h2 class="font-bold text-lg mb-2 group-hover:text-green-600 transition">
{{ $article->title }}
</h2>
<p class="text-xs text-green-600 font-semibold mb-2">
{{ optional($article->category)->name }}
</p>
<p class="text-gray-600 text-sm mb-4">
{{ Str::limit($article->excerpt, 100) }}
</p>

<a href="/artikel/{{ $article->slug }}"
class="text-green-600 font-semibold flex items-center gap-2">

Baca Artikel
<span class="group-hover:translate-x-1 transition">→</span>

</a>

</div>

</div>

@empty

<div class="col-span-3 text-center py-10 text-gray-500">
Artikel tidak ditemukan
</div>

@endforelse

</div>

<!-- PAGINATION -->
<div class="mt-16 flex justify-center">
{{ $articles->withQueryString()->links() }}
</div>

</div>

</section>

@endsection