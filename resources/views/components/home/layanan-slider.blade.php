<section class="py-12 md:py-20 pt-6 bg-gray-50" id="layanan"
data-aos="fade-up">

<div class="max-w-7xl mx-auto px-4 md:px-6">

<h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-12">
Layanan Kami
</h2>

<div class="swiper layananSwiper w-full">

<div class="swiper-wrapper">

@foreach($services as $service)

<div class="swiper-slide">
<a href="{{ route('layanan.show', $service->slug) }}">

<div class="group bg-white rounded-2xl shadow-soft overflow-hidden 
hover-lift cursor-pointer h-full flex flex-col">

<!-- IMAGE -->
<div class="relative overflow-hidden">

<img src="{{ asset('images/'.$service->gambar) }}"
class="w-full h-40 sm:h-48 md:h-56 object-cover transition duration-500 group-hover:scale-110">

<div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition duration-300"></div>

</div>

<!-- CONTENT -->
<div class="p-4 md:p-6 flex flex-col flex-grow">

<h3 class="font-bold text-base md:text-lg mb-2 transition duration-300 group-hover:text-green-600">
{{ $service->nama }}
</h3>

<p class="text-gray-600 text-xs md:text-sm mb-4 flex-grow">
{{ Str::limit($service->deskripsi,100) }}
</p>

<div class="flex justify-end">
<span class="text-green-600 text-xl md:text-2xl opacity-0 group-hover:opacity-100 transition duration-300">
→
</span>
</div>

</div>

</div>

</a>
</div>

@endforeach

</div>

</div>

</div>

</section>