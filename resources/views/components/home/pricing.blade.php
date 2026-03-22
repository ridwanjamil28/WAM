<section class="bg-gray-50 py-20"
data-aos="fade-up">

<div class="max-w-7xl mx-auto px-6">

<div class="grid md:grid-cols-3 gap-10">

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

@foreach($plans as $plan)
<div class="bg-white shadow-soft p-8 relative border border-gray-200 
hover-lift hover:border-green-500">

<h3 class="text-lg font-semibold mb-4 border-b-2 border-green-500 inline-block pb-2">
{{ $plan['title'] }}
</h3>

<p class="text-gray-500 text-sm mt-4">Mulai Dari</p>

<h2 class="text-4xl font-bold text-gray-900 mb-6">
{{ $plan['price'] }}
</h2>

<div class="border-t pt-6">

<p class="font-semibold mb-3">Item Pekerjaan:</p>

<ul class="space-y-2 text-gray-600 text-sm">
@foreach($plan['items'] as $item)
<li>✔ {{ $item }}</li>
@endforeach
</ul>

<p class="font-semibold mt-6 mb-3">Syarat & Ketentuan:</p>

<ul class="space-y-2 text-gray-600 text-sm">
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
class="mt-8 inline-block bg-black text-white px-6 py-3 font-semibold hover:bg-gray-800">

CHOOSE PLAN →

</a>

</div>
@endforeach

</div>

</div>

</section>