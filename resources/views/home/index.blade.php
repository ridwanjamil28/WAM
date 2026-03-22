@extends('layouts.website')

@section('content')
<x-home.hero />

<x-home.trusted />

<x-home.layanan-highlight />

<x-home.layanan-slider :services="$services" />

<x-home.portfolio :portfolios="$portfolios" />

<x-home.counter />

<x-home.keunggulan />

<x-home.pricing />

<x-home.cta />

<x-home.contact />


@endsection

@push('scripts')
<script>

window.onload = function(){

new Swiper(".layananSwiper", {
slidesPerView: 3,
spaceBetween: 30,
loop: true,
freeMode: true,
freeModeMomentum: false,
autoplay: { delay: 0, disableOnInteraction: false },
speed: 5000,

observer: true,
    observeParents: true
});

new Swiper(".portfolioSwiper", {
slidesPerView: 3,
spaceBetween: 30,
loop: true,
autoplay: { delay: 2500, disableOnInteraction: false },
speed: 1000,
observer: true,
    observeParents: true

});


};
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