@extends('layouts.website')
@php use Illuminate\Support\Str; @endphp

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-green-600 to-green-800 py-20 text-white text-center">
<div class="max-w-4xl mx-auto px-6">

<h1 class="text-4xl md:text-5xl font-bold mb-4">
Layanan Kami
</h1>

<p class="text-lg text-green-100">
Solusi profesional untuk kebutuhan Anda
</p>

</div>
</section>

<!-- CONTENT -->
<section class="py-24 bg-gray-50">

<div class="max-w-7xl mx-auto px-6">

<h2 class="text-3xl font-bold mb-12 text-center">
Daftar Layanan
</h2>

<!-- GRID -->
<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

@forelse($services as $service)

<div class="bg-white rounded-2xl shadow-soft overflow-hidden hover-lift group">

<div class="overflow-hidden">
    <a href="https://wa.me/6285137399974?text={{ urlencode('Halo Wiyasa Artha Multiguna,

Saya ingin berkonsultasi mengenai pengurusan perizinan bangunan.

Nama :
Lokasi Proyek :

Terima kasih.') }}">
<img src="{{ asset('images/'.$service->gambar ?? 'https://via.placeholder.com/400x250') }}"
class="w-full h-52 object-cover group-hover:scale-105 transition duration-500">
</div>

<div class="p-6">
<h2 class="font-bold text-lg mb-2 group-hover:text-green-600 transition">
{{ $service->nama }}
</h2>

<p class="text-gray-600 text-sm mb-4">
{{ Str::limit($service->deskripsi, 100) }}
</p>

<a href="{{ route('layanan.show', $service->slug) }}"
class="text-green-600 font-semibold flex items-center gap-2">

Lihat Detail
<span class="group-hover:translate-x-1 transition">→</span>

</a>

</div>
</a>
</div>

@empty

<div class="col-span-3 text-center py-10 text-gray-500">
Layanan tidak ditemukan
</div>

@endforelse

</div>

<!-- PAGINATION -->
<div class="mt-16 flex justify-center">
{{ $services->withQueryString()->links() }}
</div>

</div>

</section>

@endsection