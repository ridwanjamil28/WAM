<section class="bg-gray-50 py-12 md:py-20">

<div class="max-w-7xl mx-auto px-4 md:px-6">

<h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-12">
Dipercaya Oleh
</h2>

@php
$logos = [
    'images/12.jpeg',
    'images/logo-wiyasa.png',
    'images/logo-wiyasa.png',
    'images/logo-wiyasa.png',
];
@endphp

<!-- 🔥 SATU GRID SAJA -->
<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 md:gap-10 justify-items-center">

@foreach ($logos as $logo)
    <div class="w-full flex justify-center">
        <img src="{{ asset($logo) }}"
        class="h-20 md:h-24 max-w-[160px] object-contain grayscale opacity-70 
        hover:grayscale-0 hover:opacity-100 hover:scale-110 
        transition duration-300">
    </div>
@endforeach

</div>

</div>

</section>