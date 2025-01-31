/**
 * @function swiperDepoimentos
 *
 * Handle the Swiper slider for the `depoimentos` section.
 *
 * @author Moisés Moreira Reis
 * @version 1.0.0
 */
var swiperDepoimentos = new Swiper(".depoimentos-swiper", {
    allowTouchMove: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        1280: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    }
});

var swiperCta = new Swiper(".cta-swiper", {
    autoplay: {
        delay: 10500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        1280: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    }
});