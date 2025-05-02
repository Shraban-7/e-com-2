import './bootstrap';
import './featureSlider';

const toggleButton = document.getElementById('mobile-search-toggle');
const searchBox = document.getElementById('mobile-search-box');

toggleButton?.addEventListener('click', () => {
    searchBox?.classList.toggle('hidden');
});

const swiper = new Swiper('.swiper', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
});
