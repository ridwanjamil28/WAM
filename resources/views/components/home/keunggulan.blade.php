<section id="tentang" class="max-w-7xl mx-auto px-4 md:px-6 py-12 md:py-20">

<h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-12">
Kenapa Memilih Kami?
</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">

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
<div class="bg-white border border-gray-100 rounded-2xl p-6 md:p-8 
shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300 text-center group">

<!-- ICON -->
<div class="w-14 h-14 mx-auto flex items-center justify-center rounded-xl bg-green-100 text-2xl mb-4 
group-hover:scale-110 transition duration-300">
{{ $item['icon'] }}
</div>

<!-- TITLE -->
<h3 class="font-semibold text-base md:text-lg mb-2">
{{ $item['title'] }}
</h3>

<!-- DESC -->
<p class="text-gray-600 text-sm md:text-base">
{{ $item['desc'] }}
</p>

</div>
@endforeach

</div>

</section>