@extends('layouts.website')

@section('content')

<section class="py-12 md:py-20 bg-gray-50">

<div class="max-w-7xl mx-auto px-4 md:px-6">

<div class="flex flex-col lg:grid lg:grid-cols-3 gap-10">

<!-- KONTEN -->
<div class="lg:col-span-2">

<a href="/artikel" class="text-sm text-gray-500 hover:text-green-600 mb-4 inline-block">
← Kembali ke Artikel
</a>

<p class="text-xs md:text-sm text-green-600 font-semibold mb-2">
{{ optional($article->category)->name }}
</p>

<div class="w-12 md:w-16 h-1 bg-green-600 mb-4 md:mb-6"></div>

<h1 class="text-2xl sm:text-3xl md:text-5xl font-bold leading-tight mb-4">
{{ $article->title }}
</h1>

<p class="text-gray-400 text-xs md:text-sm mb-4 md:mb-6">
{{ $article->created_at->format('d M Y') }}
</p>

<img src="{{ asset('storage/'.$article->image) }}"
class="w-full h-52 sm:h-64 md:h-[420px] object-cover rounded-xl md:rounded-2xl shadow-lg mb-8 md:mb-12 transition duration-500">

<div class="prose prose-sm md:prose-lg max-w-none prose-headings:font-bold prose-p:leading-relaxed prose-img:rounded-xl">
{!! $article->content !!}
</div>

</div>

<!-- SIDEBAR -->
<div class="space-y-6 md:space-y-10">

<!-- KATEGORI -->
<div class="bg-white p-4 md:p-6 rounded-xl shadow-soft">

<h3 class="font-bold mb-3 md:mb-4">Kategori</h3>

<div class="space-y-2 border-b pb-2 mb-2">

<a href="/artikel"
class="block text-gray-600 hover:text-green-600">
Semua
</a>

@foreach($categories as $cat)
<a href="/artikel?category={{ $cat->slug }}"
class="block px-3 py-2 rounded-lg hover:bg-green-50 hover:text-green-600 transition">
{{ $cat->name }}
</a>
@endforeach

</div>

</div>

<!-- ARTIKEL TERBARU -->
<div class="bg-white p-4 md:p-6 rounded-xl shadow-soft">

<h3 class="font-bold mb-3 md:mb-4">Artikel Terbaru</h3>

<div class="space-y-3 md:space-y-4">

@foreach($latest as $item)

<a href="/artikel/{{ $item->slug }}" 
class="flex gap-3 group items-center p-2 rounded-lg hover:bg-gray-100 transition">

<img src="{{ asset('storage/'.$item->image) }}"
class="w-16 h-14 md:w-20 md:h-16 object-cover rounded group-hover:scale-105 transition">

<div>
<p class="text-xs md:text-sm font-semibold group-hover:text-green-600 transition line-clamp-2">
{{ $item->title }}
</p>
</div>

</a>

@endforeach

</div>

</div>

</div>

</div>

<!-- CTA -->
<div class="mt-10 md:mt-20 p-6 md:p-10 bg-gradient-to-r from-green-100 to-green-50 rounded-xl md:rounded-2xl text-center shadow-soft">

<h3 class="font-bold text-lg md:text-xl mb-2">
Butuh Bantuan Perizinan?
</h3>

<p class="text-gray-600 text-sm md:text-base mb-4 md:mb-6">
Konsultasikan kebutuhan Anda dengan tim profesional kami
</p>

<a href="https://wa.me/6285137399974"
class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 md:px-8 py-3 rounded-lg md:rounded-xl font-semibold shadow-lg transition hover:scale-105">

Konsultasi Sekarang

</a>

</div>

</section>


@endsection