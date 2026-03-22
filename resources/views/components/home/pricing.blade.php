<section class="bg-gray-50 py-12 md:py-20"
data-aos="fade-up">

<div class="max-w-7xl mx-auto px-4 md:px-6">

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-10">

@php
$plans = [
    [
        'title' => 'Pengurusan SLF & PBG',
        'price' => 'Rp.10.000.000',
        'items' => [
            'Survey Lapangan',
            'Uji Kelaikan Bangunan',
            'Dokumen Pelaporan',
            'Plakat SLF',
        ],
        'terms' => [
            'Dokumen Persyaratan Lengkap',
            'Lokasi Jawa Barat dan Jabodetabek',
        ],
    ],
    [
        'title' => 'Pelayanan AMDAL',
        'price' => 'Rp.400.000.000',
        'items' => [
            'Survey Lapangan',
            'Uji Kelaikan Bangunan',
            'Dokumen Pelaporan',
            'Plakat SLF',
        ],
        'terms' => [
            'Dokumen Persyaratan Lengkap',
            'Lokasi Jawa Barat dan Jabodetabek',
        ],
    ],
    [
        'title' => 'Pelayanan UKL UPL',
        'price' => 'Rp.30.000.000',
        'items' => [
            'Survey Lapangan',
            'Uji Kelaikan Bangunan',
            'Dokumen Pelaporan',
            'Plakat SLF',
        ],
        'terms' => [
            'Dokumen Persyaratan Lengkap',
            'Lokasi Jawa Barat dan Jabodetabek',
        ],
    ],
];
@endphp

@foreach($plans as $index => $plan)
<div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 md:p-8 flex flex-col justify-between 
hover:shadow-xl hover:-translate-y-2 transition duration-300 relative">

<!-- 🔥 BADGE POPULAR -->
@if($index == 1)
<div class="absolute top-0 right-0 bg-green-600 text-white text-xs px-3 py-1 rounded-bl-xl">
POPULAR
</div>
@endif

<h3 class="text-base md:text-lg font-semibold mb-4 border-b-2 border-green-500 inline-block pb-2">
{{ $plan['title'] }}
</h3>

<p class="text-gray-500 text-xs md:text-sm mt-2">Mulai Dari</p>

<h2 class="text-2xl md:text-4xl font-bold text-gray-900 mb-6">
{{ $plan['price'] }}
</h2>

<div class="border-t pt-4 md:pt-6 flex-grow">

<p class="font-semibold mb-2 md:mb-3 text-sm md:text-base">Item Pekerjaan:</p>

<ul class="space-y-1 md:space-y-2 text-gray-600 text-xs md:text-sm">
@foreach($plan['items'] as $item)
<li>✔ {{ $item }}</li>
@endforeach
</ul>

<p class="font-semibold mt-4 md:mt-6 mb-2 md:mb-3 text-sm md:text-base">Syarat & Ketentuan:</p>

<ul class="space-y-1 md:space-y-2 text-gray-600 text-xs md:text-sm">
@foreach($plan['terms'] as $term)
<li>✔ {{ $term }}</li>
@endforeach
</ul>

</div>

<a href="https://wa.me/6285137399974?text={{ urlencode('Halo Wiyasa Artha Multiguna,

Saya ingin berkonsultasi mengenai pengurusan perizinan bangunan.

Nama :
Lokasi Proyek :

Terima kasih.') }}"
class="mt-6 md:mt-8 inline-block bg-green-600 text-white text-sm md:text-base px-5 py-3 font-semibold rounded-lg text-center 
hover:bg-green-700 hover:scale-105 transition duration-300">

Konsultasi Sekarang →

</a>

</div>
@endforeach

</div>

</div>

</section>