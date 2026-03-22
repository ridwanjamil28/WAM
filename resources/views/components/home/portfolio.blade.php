<section id="portofolio" class="bg-gray-900 pt-24 pb-10">


<h2 class="text-3xl font-bold text-center text-white mb-16">
Portfolio Kami
</h2>

<div class="max-w-7xl mx-auto px-6">

<div class="swiper portfolioSwiper">

<div class="swiper-wrapper">

@foreach($portfolios as $portfolio)

<div class="swiper-slide">

<div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer transform hover:-translate-y-2 transition duration-300">

@if($portfolio->gambar)
<img src="{{ asset('images/'.$portfolio->gambar) }}"
class="w-full h-64 object-cover transition duration-700 ease-in-out group-hover:scale-110">
@endif

<!-- OVERLAY -->
<div class="absolute inset-0 bg-black/20 group-hover:bg-black/60 transition duration-500"></div>

<!-- CONTENT -->
<div class="absolute inset-0 flex flex-col justify-end p-6 text-white
opacity-0 group-hover:opacity-100 transition duration-500">

<h3 class="text-xl font-bold mb-1">
{{ $portfolio->judul }}
</h3>

<p class="text-sm mb-3">
{{ Str::limit($portfolio->deskripsi, 60) }}
</p>

<span class="text-green-400 text-lg">
Lihat Detail →
</span>

</div>

</div>

</div>

@endforeach

</div>

</div>

</div>

</section>