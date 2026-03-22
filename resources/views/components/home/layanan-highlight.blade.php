<section class="w-full bg-white mx-auto px-4 md:px-6 py-12 md:py-20"
data-aos="fade-up">

<div class="flex flex-col md:grid md:grid-cols-2 gap-10 md:gap-20 items-center">

<!-- IMAGE -->
<div class="relative w-full">
<div class="overflow-hidden rounded-2xl">
    <img src="{{ asset('images/13.jpeg') }}"
    class="w-full h-auto md:max-h-[500px] object-cover transition duration-700 hover:scale-105">
</div>

<!-- EXPERIENCE BADGE -->
<div class="absolute right-2 md:-right-8 top-4 md:top-12 bg-green-700 text-white px-4 py-3 md:px-6 md:py-4 shadow-soft rounded-xl animate-float">

<h2 class="text-lg md:text-2xl font-bold">50+</h2>
<p class="text-xs">Project Experience</p>

</div>

</div>


<!-- TEXT -->
<div class="w-full max-w-xl text-center md:text-left">

<p class="text-green-600 text-xl md:text-3xl font-bold mb-3">
KEPERCAYAAN ANDA, PRIORITAS KAMI
</p>

<h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 leading-snug mb-4 md:mb-6">
Solusi Perizinan Bangunan
Yang Praktis dan Terpercaya
</h2>

<p class="text-gray-600 mb-6 md:mb-8 text-sm md:text-base">
Kami membantu pengurusan berbagai kebutuhan perizinan bangunan
dengan proses yang cepat, tepat, dan sesuai regulasi pemerintah.
</p>

<div class="space-y-4 md:space-y-6">

@php
$items = [
    [
        'icon' => '📄',
        'title' => 'Sertifikat Laik Fungsi (SLF)',
        'desc' => 'Pengurusan SLF untuk memastikan bangunan memenuhi standar kelayakan fungsi.'
    ],
    [
        'icon' => '📐',
        'title' => 'Persetujuan Bangunan Gedung (PBG)',
        'desc' => 'Pengajuan PBG sesuai regulasi terbaru pemerintah.'
    ],
    [
        'icon' => '📑',
        'title' => 'Dokumen Lingkungan',
        'desc' => 'Pengurusan dokumen lingkungan seperti AMDAL dan UKL UPL.'
    ],
];
@endphp

@foreach($items as $item)
<div class="flex items-start gap-4 p-3 rounded-xl transition hover:bg-gray-50 hover:shadow-soft cursor-pointer group">

<div class="bg-green-100 text-green-600 w-9 h-9 md:w-10 md:h-10 flex items-center justify-center rounded-lg transition group-hover:scale-110">
{{ $item['icon'] }}
</div>

<div class="text-left">
<h3 class="font-semibold text-sm md:text-base">{{ $item['title'] }}</h3>
<p class="text-xs md:text-sm text-gray-600">
{{ $item['desc'] }}
</p>
</div>

</div>
@endforeach

</div>

<a href="{{ route('layanan') }}"
class="inline-block mt-6 md:mt-8 bg-green-600 text-white px-5 py-3 md:px-7 md:py-3 text-sm md:text-base hover:scale-105 active:scale-95 font-semibold rounded-lg shadow-soft btn-glow">

LIHAT LAYANAN →

</a>

</div>

</div>

</section>