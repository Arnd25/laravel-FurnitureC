import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, Keyboard, EffectFade } from 'swiper/modules';


const swiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination, Autoplay, Keyboard, EffectFade ],
    spaceBetween: 20,
    slidesPerView: 1,
    loop: true,
    speed: 500,
    grabCursor: true,
    // autoplay: {
    //     delay: 5000,
    // },
    watchOverflow: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        800: {
            slidesPerView: 1.2,
        },
        1400: {
            slidesPerView: 2,
            centeredSlides: false,
        },

    }

});

