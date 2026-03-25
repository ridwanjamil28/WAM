@extends('layouts.website')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-green-600 to-green-800 py-20 text-white text-center">
<div class="max-w-4xl mx-auto px-6">

<h1 class="text-4xl md:text-5xl font-bold mb-4">
Tentang kami
</h1>

<p class="text-lg text-green-100">
Solusi profesional untuk kebutuhan Anda
</p>

</div>
</section>

<!-- ABOUT -->
<section class="py-20">
<div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <!-- IMAGE -->
    <div class="relative">
        <img src="{{ asset('images/logo-wiyasa.png') }}"
     class="rounded-2xl shadow-xl hover:scale-105 transition duration-500">

        <!-- floating box -->
        <div class="absolute -bottom-6 -right-6 bg-green-600 text-white p-6 rounded-xl shadow-lg">
            <p class="text-2xl font-bold">3+</p>
            <p class="text-sm">Tahun Pengalaman</p>
        </div>
    </div>

    <!-- TEXT -->
    <div>
        <h2 class="text-3xl font-bold text-green-600 mb-4">
            Wiyasa Artha Multiguna
        </h2>

        <p class="text-gray-600 mb-4 leading-relaxed">
            Kami merupakan perusahaan yang bergerak dalam bidang jasa pengurusan perizinan seperti PBG, SLF, PKKPR serta dokumen lingkungan.
        </p>

        <p class="text-gray-600 leading-relaxed">
            Dengan tim profesional dan pengalaman yang kuat, kami berkomitmen memberikan layanan terbaik secara cepat, tepat, dan terpercaya.
        </p>

        <!-- stats kecil -->
        <div class="flex gap-10 mt-6">

        <div class="text-center">
            <h3 class="text-3xl font-bold text-green-600">50+</h3>
            <p class="text-gray-500 text-sm">Project</p>
        </div>

        <div class="text-center">
            <h3 class="text-3xl font-bold text-green-600">30+</h3>
            <p class="text-gray-500 text-sm">Client</p>
        </div>

        </div>

    </div>

</div>
</section>

<!-- VISI MISI -->
<section class="bg-gray-50 py-20">

<div class="max-w-7xl mx-auto px-6">

    <!-- TITLE -->
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">
            Visi & Misi
        </h2>
        <p class="text-gray-500 mt-2">
            Komitmen kami dalam memberikan layanan terbaik
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-10">

        <!-- VISI -->
       <div class="group bg-white p-10 rounded-2xl shadow-md hover:shadow-2xl transition duration-300 border border-gray-100 space-y-5 flex flex-col">

    <!-- ICON -->
    <div class="w-14 h-14 flex items-center justify-center bg-green-100 text-green-600 text-2xl rounded-xl">
        🎯
    </div>

    <h3 class="text-xl font-bold text-green-600">
        Visi
    </h3>

    <div class="w-10 h-1 bg-green-500 rounded"></div>

    <p class="text-gray-600 leading-relaxed max-w-md">
        Menjadi perusahaan jasa konsultasi perizinan terbaik dan terpercaya di Indonesia.
    </p>

</div>

        <!-- MISI -->
       <div class="group bg-white p-10 rounded-2xl shadow-md hover:shadow-2xl transition duration-300 border border-gray-100 space-y-5 flex flex-col">

    <!-- ICON -->
    <div class="w-14 h-14 flex items-center justify-center bg-green-100 text-green-600 text-2xl rounded-xl">
        🚀
    </div>
        

            <h3 class="text-xl font-bold text-green-600 mb-3">
                Misi
            </h3>
                <div class="w-10 h-1 bg-green-500 rounded"></div>
            <ul class="text-gray-600 space-y-3 leading-relaxed max-w-md">
                <li>✔ Memberikan pelayanan terbaik kepada klien</li>
                <li>✔ Menyelesaikan pekerjaan dengan cepat dan tepat</li>
                <li>✔ Menjaga profesionalitas dan kepercayaan</li>
            </ul>

        </div>

    </div>

</div>

</section>

<!-- CTA -->
<section class="bg-gradient-to-r from-green-600 to-green-800 py-12 md:py-16 text-white relative overflow-hidden">
@php
$wa = setting('whatsapp');
$message = urlencode(setting('wa_message'));
@endphp
<!-- 🔥 BACKGROUND EFFECT -->
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_top,_white,_transparent)]"></div>

<div class="max-w-4xl mx-auto text-center px-4 md:px-6 relative z-10">

<h1 class="text-2xl sm:text-3xl md:text-5xl font-bold leading-tight">
Jasa Pengurusan Perizinan Bangunan
</h1>

<p class="mt-4 md:mt-6 text-sm md:text-lg text-green-100">
Kami membantu pengurusan PBG, SLF, PKKPR dan Dokumen Lingkungan secara cepat dan profesional.
</p>

<a href="https://wa.me/{{ $wa }}?text={{ $message }}"
class="inline-block mt-6 md:mt-8 bg-white text-green-700 font-semibold px-6 md:px-8 py-3 rounded-lg shadow-lg 
hover:bg-gray-100 hover:scale-105 transition duration-300">

Konsultasi Gratis via WhatsApp →

</a>

</div>

</section>

@endsection