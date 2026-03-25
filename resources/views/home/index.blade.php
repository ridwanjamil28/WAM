@extends('layouts.website')

@section('content')
<x-home.hero />

<x-home.trusted :clients="$clients" />

<x-home.layanan-highlight />

<x-home.layanan-slider :services="$services" />

<x-home.portfolio :portfolios="$portfolios" />

<x-home.counter />

<x-home.keunggulan />

<x-home.pricing :pricings="$pricings" />

<x-home.cta />

<x-home.contact />


@endsection

@push('scripts')
<script>

window.onload = function(){

// 🔥 LAYANAN SLIDER
new Swiper(".layananSwiper", {
slidesPerView: 1,
spaceBetween: 20,
loop: true,
freeMode: true,
freeModeMomentum: false,
autoplay: { delay: 0, disableOnInteraction: false },
speed: 5000,

breakpoints: {
640: { slidesPerView: 1 },
768: { slidesPerView: 2 },
1024: { slidesPerView: 3 }
},

observer: true,
observeParents: true
});


// 🔥 PORTFOLIO SLIDER
new Swiper(".portfolioSwiper", {
slidesPerView: 1,
spaceBetween: 20,
loop: true,
autoplay: { delay: 2500, disableOnInteraction: false },
speed: 1000,

breakpoints: {
640: { slidesPerView: 1 },
768: { slidesPerView: 2 },
1024: { slidesPerView: 3 }
},

observer: true,
observeParents: true
});

};


// 🔥 COUNTER ANIMATION
document.addEventListener("DOMContentLoaded", function(){

const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {

counter.innerText = '0';

const updateCounter = () => {

const target = +counter.getAttribute('data-target');
const c = +counter.innerText;

const increment = target / 200;

if(c < target){
counter.innerText = `${Math.ceil(c + increment)}`;
setTimeout(updateCounter, 10);
}else{
counter.innerText = target;
}

};

updateCounter();

});

});

</script>
@endpush