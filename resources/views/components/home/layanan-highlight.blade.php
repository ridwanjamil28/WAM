<section class="w-full bg-white mx-auto px-6 py-24"
data-aos="fade-up">

<div class="grid md:grid-cols-2 gap-20 items-center">

<!-- IMAGE -->
<div class="relative">
<div class="overflow-hidden rounded-2xl">
    <img src="{{ asset('images/13.jpeg') }}"
    class="w-full max-h-[500px] object-cover transition duration-700 hover:scale-105">
</div>
<!-- EXPERIENCE BADGE -->
<div class="absolute -right-8 top-12 bg-green-700 text-white px-6 py-4 shadow-soft rounded-xl animate-float">

<h2 class="text-2xl font-bold">50+</h2>
<p class="text-xs">Project Experience</p>

</div>

</div>


<!-- TEXT -->
<div class="max-w-xl reveal">

<p class="text-green-600 text-3xl font-bold mb-3">
KEPERCAYAAN ANDA, PRIORITAS KAMI
</p>

<h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-snug mb-6">
Solusi Perizinan Bangunan
Yang Praktis dan Terpercaya
</h2>

<p class="text-gray-600 mb-8">
Kami membantu pengurusan berbagai kebutuhan perizinan bangunan
dengan proses yang cepat, tepat, dan sesuai regulasi pemerintah.
</p>

<div class="space-y-6">

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
<div class="flex gap-4 p-3 rounded-xl transition hover:bg-gray-50 hover:shadow-soft cursor-pointer group">

<div class="bg-green-100 text-green-600 w-10 h-10 flex items-center justify-center rounded-lg transition group-hover:scale-110">
{{ $item['icon'] }}
</div>

<div>
<h3 class="font-semibold">{{ $item['title'] }}</h3>
<p class="text-sm text-gray-600">
{{ $item['desc'] }}
</p>
</div>

</div>
@endforeach

</div>

<a href="{{ route('layanan') }}"
class="inline-block mt-8 bg-green-600 text-white px-7 py-3 hover:scale-105 active:scale-95 font-semibold rounded-lg shadow-soft btn-glow">

LIHAT LAYANAN →

</a>

</div>

</div>

</section>