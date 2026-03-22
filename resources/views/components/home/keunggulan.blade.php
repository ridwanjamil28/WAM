<section id="tentang" class="max-w-7xl mx-auto px-6 py-12">

<h2 class="text-3xl font-bold text-center mb-10">
Kenapa Memilih Kami?
</h2>

<div class="grid md:grid-cols-3 gap-8 text-center">

@php
$items = [
    [
        'icon' => '🛡',
        'title' => 'Profesional',
        'desc' => 'Tim berpengalaman dalam pengurusan perizinan bangunan.'
    ],
    [
        'icon' => '⚡',
        'title' => 'Proses Cepat',
        'desc' => 'Kami membantu mempercepat proses pengurusan dokumen.'
    ],
    [
        'icon' => '💬',
        'title' => 'Konsultasi Gratis',
        'desc' => 'Konsultasikan kebutuhan perizinan Anda dengan tim kami.'
    ],
];
@endphp

@foreach($items as $item)
<div class="bg-white shadow-md rounded-xl p-6 hover:shadow-lg transition">

<h3 class="font-semibold text-lg mb-2">
{{ $item['icon'] }} {{ $item['title'] }}
</h3>

<p class="text-gray-600 text-sm">
{{ $item['desc'] }}
</p>

</div>
@endforeach

</div>

</section>