const offersSwiper = new Swiper('.OffersPopular__slider', {
    slidesPerView: 1,
    centeredSlides: true,
    navigation: {
        nextEl: ".buttons-offer__next",
        prevEl: ".buttons-offer__prev",
    },

    breakpoints: {
        1000: {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: false
        }
    }

});

// window.onload = function () {
//     const width = document.body.offsetWidth;
//     if (width > 1000) {
//         offersSwiper.params.centeredSlides = false
//         offersSwiper.update()
//     } else {
//         offersSwiper.params.centeredSlides = true
//         offersSwiper.update()
//     }
// }

