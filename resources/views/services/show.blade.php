@extends('layouts.website')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-green-600 to-green-800 py-20 text-white text-center">

<div class="max-w-4xl mx-auto px-6">

<p class="text-sm uppercase tracking-widest text-green-200 mb-2">
Layanan Kami
</p>

<p class="text-sm text-green-200 mb-4">
<a href="/" class="hover:underline">Home</a> / 
<a href="/layanan" class="hover:underline">Layanan</a> / 
{{ $service->judul }}
</p>

<h1 class="text-4xl md:text-5xl font-bold leading-tight">
{{ $service->judul }}
</h1>

</div>

</section>

<!-- CONTENT -->
<section class="max-w-5xl mx-auto px-6 py-20">

@if($service->gambar)

<div class="overflow-hidden rounded-2xl shadow-lg mb-12">
<img src="{{ asset('images/'.$service->gambar) }}"
class="w-full h-[420px] object-cover hover:scale-105 transition duration-700">
</div>

@endif

<!-- DESKRIPSI -->
<div class="prose prose-lg max-w-none">

{!! $service->deskripsi !!}

</div>

<!-- CTA -->
<div class="mt-16 p-10 bg-green-50 rounded-2xl text-center shadow-soft">

<h3 class="text-2xl font-bold mb-2">
Butuh Bantuan {{ $service->judul }}?
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