@extends('layouts.website')

@section('content')

<section class="py-24 bg-gray-50">

<div class="max-w-7xl mx-auto px-6">

<div class="grid lg:grid-cols-3 gap-10">

<!-- KONTEN -->
<div class="lg:col-span-2">

<a href="/artikel" class="text-sm text-gray-500 hover:text-green-600 mb-6 inline-block">
← Kembali ke Artikel
</a>
<p class="text-sm text-green-600 font-semibold mb-2">
{{ optional($article->category)->name }}
</p>
<div class="w-16 h-1 bg-green-600 mb-6"></div>
<h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">
{{ $article->title }}
</h1>

<p class="text-gray-400 mb-6">
{{ $article->created_at->format('d M Y') }}
</p>

<img src="{{ asset('storage/'.$article->image) }}"
class="w-full h-[420px] object-cover rounded-2xl shadow-lg mb-12 hover:scale-[1.02] transition duration-500">

<div class="prose prose-lg max-w-none prose-headings:font-bold prose-p:leading-relaxed prose-img:rounded-xl">
{!! $article->content !!}
</div>

</div>
<!-- SIDEBAR -->
<div class="space-y-10">

<!-- KATEGORI -->
<div class="bg-white p-6 rounded-xl shadow-soft">

<h3 class="font-bold  mb-4">Kategori</h3>

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
<div class="bg-white p-6 rounded-xl shadow-soft">

<h3 class="font-bold mb-4">Artikel Terbaru</h3>

<div class="space-y-4">

@foreach($latest as $item)

<a href="/artikel/{{ $item->slug }}" 
class="flex gap-3 group items-center p-2 rounded-lg hover:bg-gray-100 transition">

<img src="{{ asset('storage/'.$item->image) }}"
class="w-20 h-16 object-cover rounded group-hover:scale-105 transition">

<div>
<p class="text-sm font-semibold group-hover:text-green-600 transition">
{{ $item->title }}
</p>
</div>

</a>

@endforeach

</div>

</div>

</div>



</div>
<div class="mt-20 p-10 bg-gradient-to-r from-green-100 to-green-50 rounded-2xl text-center shadow-soft">

<h3 class="font-bold text-xl mb-2">
Butuh Bantuan Perizinan?
</h3>

<p class="text-gray-600 mb-6">
Konsultasikan kebutuhan Anda dengan tim profesional kami
</p>

<a href="https://wa.me/6285137399974"
class="inline-block bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-xl font-semibold shadow-lg transition hover:scale-105">

Konsultasi Sekarang

</a>

</div>


</section>


@endsection