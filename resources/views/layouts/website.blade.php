<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link rel="icon" href="{{ asset('images/logo-wiyasa.png') }}" type="image/png">
<title>Konsultan Perizinan</title>

<link rel="stylesheet" href="/build/assets/app-44l-bvTZ.css">
<script src="/build/assets/app-BlJoUbyE.js" defer></script>

</head>

<body class="bg-gray-100">

<!-- Top Bar -->
<div class="bg-white border-b text-sm">
  <div class="max-w-7xl mx-auto flex justify-between items-center py-2 px-4">
    
    <div class="flex gap-6 text-gray-700">
      <span>✉ wiyasaarthamultiguna@gmail.com</span>
      <span>📍 Jl. Pamekar Barat Asri II No.11, Kota Bandung</span>
      <span>📞 +62 8XXX XXXX XXX</span>
    </div>

    <div class="bg-green-600 text-white px-6 py-2">
      Follow Us
    </div>

  </div>
</div>

<!-- Navbar -->
<nav id="navbar"
class="sticky top-0 z-50 bg-white/80 backdrop-blur-lg transition-all duration-500">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-4">

    <!-- Logo -->
    <a href="/" class="flex items-center gap-3">

      <img src="{{ asset('images/logo-wiyasa.png') }}"
      class="w-20 h-20 object-contain">

      <div class="flex flex-col leading-none text-green-900 font-bold text-lg">
      <span>WIYASA</span>
      <span>ARTHA</span>
      <span>MULTIGUNA</span>
      </div>

  </a>

    <!-- Menu Desktop-->
   <ul class="hidden md:flex font-bold gap-8 text-gray-700">

    <li><a href="{{ url('/#beranda') }}" class="hover:text-green-600">Beranda</a></li>

    <li><a href="{{ route('layanan') }}" class="hover:text-green-600">Layanan</a></li>

    <li><a href="{{ url('/portfolio') }}" class="hover:text-green-600">Portofolio</a></li>

    <li><a href="{{ url('/#tentang') }}" class="hover:text-green-600">Tentang Kami</a></li>

    <li><a href="{{ url('/#kontak') }}" class="hover:text-green-600">Kontak Kami</a></li>

    <li><a href="/artikel" class="hover:text-green-600">Artikel</a></li>

    </ul>
<!-- Hamburger + Button -->
<div class="flex items-center gap-4">

<button id="menu-btn" class="md:hidden text-2xl">
☰
</button>

    <!-- Button -->
    <button class="bg-black text-white px-6 py-3 font-semibold rounded-lg shadow-soft btn-glow">
     <a href="https://wa.me/6285137399974?text={{ urlencode('Halo Wiyasa Artha Multiguna,

Saya ingin berkonsultasi mengenai pengurusan perizinan bangunan.

Nama :
Lokasi Proyek :

Terima kasih.') }}"> HUBUNGI KAMI →</a>
    </button>
</div>
  </div>

  <!-- MOBILE MENU -->

<div id="mobile-menu"
class="hidden bg-white shadow-soft md:hidden transition-all duration-300">

<ul class="flex flex-col text-center py-6 space-y-4">

<li><a href="{{ url('/#beranda') }}" class="hover:text-green-600">Beranda</a></li>
<li><a href="{{ url('/layanan') }}" class="hover:text-green-600">Layanan</a></li>
<li><a href="{{ url('/portfolio') }}" class="hover:text-green-600">Portofolio</a></li>
<li><a href="{{ url('/#tentang') }}" class="hover:text-green-600">Tentang Kami</a></li>
<li><a href="{{ url('/#kontak') }}" class="hover:text-green-600">Kontak Kami</a></li>
<li><a href="/artikel" class="hover:text-green-600">Artikel</a></li>



</ul>

</div>

</nav>

<!-- CONTENT -->

<div>
@yield('content')
</div>


<!-- FOOTER -->

<footer class="bg-gray-900 text-gray-300 pt-16 pb-6 border-t border-gray-800">

<div class="max-w-7xl mx-auto px-6">

<div class="grid md:grid-cols-4 gap-10 mb-10">

<!-- LOGO -->
<div>

<div class="flex items-center gap-3 mb-4">

<img src="{{ asset('images/logo-wiyasa.png') }}"
class="w-14">

<div class="leading-tight">
<p class="font-bold text-white">WIYASA</p>
<p class="font-bold text-white">ARTHA</p>
<p class="font-bold text-white">MULTIGUNA</p>
</div>

</div>

<p class="text-sm text-gray-400">
Kami membantu pengurusan perizinan bangunan seperti 
PBG, SLF, PKKPR dan dokumen lingkungan secara 
profesional dan terpercaya.
</p>

</div>

<!-- MENU -->
<div>

<h3 class="text-white font-semibold mb-4">
Menu
</h3>

<ul class="space-y-2">

<li><a href="#beranda" class="hover:text-green-500">Beranda</a></li>
<li><a href="#layanan" class="hover:text-green-500">Layanan</a></li>
<li><a href="#portofolio" class="hover:text-green-500">Portfolio</a></li>
<li><a href="#tentang" class="hover:text-green-500">Tentang Kami</a></li>
<li><a href="#" class="hover:text-green-500">Artikel</a></li>

</ul>

</div>

<!-- LAYANAN -->
<div>

<h3 class="text-white font-semibold mb-4">
Layanan
</h3>

<ul class="space-y-2">

<li>PBG</li>
<li>SLF</li>
<li>PKKPR</li>
<li>Dokumen Lingkungan</li>

</ul>

</div>

<!-- KONTAK -->
<div>

<h3 class="text-white font-semibold mb-4">
Kontak
</h3>

<ul class="space-y-3 text-sm">

<li>📍 Kota Bandung</li>

<li>
📞 +62 8XXX XXXX XXX
</li>

<li>
✉ wiyasaarthamultiguna@gmail.com
</li>

<li>

<a href="https://wa.me/6285137399974?text={{ urlencode('Halo Wiyasa Artha Multiguna,

Saya ingin berkonsultasi mengenai pengurusan perizinan bangunan.

Nama :
Lokasi Proyek :

Terima kasih.') }}"
class="inline-block bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">

Chat WhatsApp

</a>

</li>

</ul>

</div>

</div>

<!-- COPYRIGHT -->

<div class="border-t border-gray-700 pt-6 text-center text-sm text-gray-400">

© {{ date('Y') }} Wiyasa Artha Multiguna. All Rights Reserved.

</div>

</div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


@stack('scripts')
<script>

const navbar = document.getElementById("navbar");

window.addEventListener("scroll", function(){

if(window.scrollY > 50){
    navbar.classList.add("bg-white","shadow-soft");
}else{
    navbar.classList.remove("bg-white","shadow-soft");
}

});


</script>

<script>

const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

menuBtn.addEventListener("click", () => {

mobileMenu.classList.toggle("hidden");

});

</script>

<!-- FLOATING WHATSAPP -->

<div class="fixed bottom-6 right-6 group z-50 animate-bounce" >

<!-- Tooltip -->
<div class="absolute right-16 top-1/2 -translate-y-1/2 
bg-white text-gray-800 text-sm font-bold px-4 py-2 rounded-lg shadow-lg 
opacity-0 group-hover:opacity-100 transition duration-300">

 Berkonsultasi Sekarang...

</div>

<!-- Button -->
<a href="https://wa.me/6285137399974?text={{ urlencode('Halo Wiyasa Artha Multiguna,

Saya ingin berkonsultasi mengenai pengurusan perizinan bangunan.

Nama :
Lokasi Proyek :

Terima kasih.') }}"
target="_blank"
class="bg-green-500 text-white p-4 rounded-full shadow-soft btn-glow
flex items-center justify-center
shadow-[0_0_20px_rgba(34,197,94,0.6)]
transform transition duration-300
group-hover:scale-110">

<!-- WHATSAPP LOGO -->
<svg xmlns="http://www.w3.org/2000/svg"
width="28"
height="28"
fill="currentColor"
viewBox="0 0 24 24">

<path d="M20.52 3.48A11.91 11.91 0 0 0 12.04 0C5.42 0 .04 5.38.04 12c0 2.12.55 4.19 1.59 6.02L0 24l6.19-1.62A11.95 11.95 0 0 0 12.04 24C18.66 24 24.04 18.62 24.04 12c0-3.19-1.24-6.19-3.52-8.52zM12.04 21.82c-1.83 0-3.62-.49-5.19-1.41l-.37-.22-3.67.96.98-3.57-.24-.37A9.74 9.74 0 0 1 2.3 12c0-5.37 4.37-9.74 9.74-9.74 2.6 0 5.04 1.01 6.88 2.85a9.66 9.66 0 0 1 2.86 6.89c0 5.37-4.37 9.82-9.74 9.82zm5.35-7.37c-.29-.15-1.71-.84-1.98-.93-.27-.1-.47-.15-.66.15-.19.29-.76.93-.93 1.12-.17.19-.34.22-.63.07-.29-.15-1.22-.45-2.32-1.44-.86-.77-1.44-1.71-1.61-2-.17-.29-.02-.45.13-.6.13-.13.29-.34.44-.51.15-.17.19-.29.29-.48.1-.19.05-.36-.02-.51-.07-.15-.66-1.59-.9-2.17-.23-.56-.47-.49-.66-.5-.17-.01-.36-.01-.56-.01-.19 0-.51.07-.78.36-.27.29-1.03 1.01-1.03 2.46 0 1.45 1.06 2.85 1.21 3.05.15.19 2.09 3.19 5.06 4.47.71.31 1.27.49 1.71.63.72.23 1.37.2 1.88.12.57-.08 1.71-.7 1.95-1.38.24-.68.24-1.26.17-1.38-.07-.12-.27-.19-.56-.34z"/>

</svg>

</a>

</div>
</body>
</html>