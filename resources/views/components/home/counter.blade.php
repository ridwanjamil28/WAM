<section class="bg-gray-900 py-12 md:py-16 border-t border-gray-800">

<div class="max-w-7xl mx-auto px-4 md:px-6">

<div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-10 text-center text-white">

@php
$items = [
    ['value' => 50, 'label' => 'Project Selesai', 'suffix' => '+'],
    ['value' => 30, 'label' => 'Client', 'suffix' => '+'],
    ['value' => 3, 'label' => 'Tahun Pengalaman', 'suffix' => '+'],
    ['value' => 100, 'label' => 'Kepuasan Client', 'suffix' => '%'],
];
@endphp

@foreach($items as $item)
<div class="p-4 md:p-6 rounded-xl bg-white/5 backdrop-blur-sm hover:bg-white/10 transition duration-300">

<h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-green-400">
    <span class="counter" data-target="{{ $item['value'] }}">0</span>{{ $item['suffix'] }}
</h2>

<p class="text-gray-400 mt-2 text-xs md:text-sm">
    {{ $item['label'] }}
</p>

</div>
@endforeach

</div>

</div>

</section>