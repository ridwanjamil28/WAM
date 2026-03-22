<section class="bg-gray-900 pt-10 border-t border-gray-800 pb-20">

<div class="max-w-7xl mx-auto px-6">

<div class="grid grid-cols-2 md:grid-cols-4 gap-10 text-center text-white">

@php
$items = [
    ['value' => 50, 'label' => 'Project Selesai', 'suffix' => '+'],
    ['value' => 30, 'label' => 'Client', 'suffix' => '+'],
    ['value' => 3, 'label' => 'Tahun Pengalaman', 'suffix' => '+'],
    ['value' => 100, 'label' => 'Kepuasan Client', 'suffix' => '%'],
];
@endphp

@foreach($items as $item)
<div>

<h2 class="text-4xl font-bold">
    <span class="counter" data-target="{{ $item['value'] }}">0</span>{{ $item['suffix'] }}
</h2>

<p class="text-gray-400 mt-2">
    {{ $item['label'] }}
</p>

</div>
@endforeach

</div>

</div>

</section>