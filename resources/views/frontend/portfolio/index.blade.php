@extends('layouts.website')

@section('content')

<!-- HERO -->
<section class="relative bg-black text-white py-24 text-center">
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10">
        <h1 class="text-5xl font-bold">PORTOFOLIO</h1>
        <p class="text-sm  mb-4">
        <a href="/" class="hover:underline">Home</a> / 
        <a href="/Portfolio" class="hover:underline">portfolio</a> / 
    </div>
</section>

<!-- CLIENT -->
<section class="py-16 text-center">
    <h2 class="text-green-600 text-2xl font-bold mb-10">
        Daftar Klien Kami
    </h2>

    <div class="flex flex-wrap justify-center gap-10">

        {{-- contoh logo --}}
        @for ($i = 0; $i < 10; $i++)
            <img src="https://via.placeholder.com/120x80"
                 class="h-16 object-contain opacity-70 hover:opacity-100 transition">
        @endfor

    </div>
</section>

<!-- PBG -->
<section class="py-16">
    <h2 class="text-center text-green-600 text-2xl font-bold mb-10">
        PBG & SLF
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-6">

        @for ($i = 0; $i < 8; $i++)
            <img src="https://via.placeholder.com/300x200"
                 class="rounded-lg object-cover w-full h-40 hover:scale-105 transition">
        @endfor

    </div>
</section>

<!-- GALLERY -->
<section class="py-16">
    <h2 class="text-center text-red-600 text-2xl font-bold mb-10">
        Pengalaman Pekerjaan
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-5 gap-3 px-6">

        @forelse($portfolios as $item)
        <div class="relative group">
            <img src="{{ asset('images/'.$item->gambar) }}"
                 class="w-full h-32 object-cover rounded hover:scale-105 transition">
        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center text-white text-sm transition">
        {{ $item->judul ?? 'Portfolio' }}
         </div>
        </div>
        @empty
        @endforelse

    </div>
</section>

@endsection