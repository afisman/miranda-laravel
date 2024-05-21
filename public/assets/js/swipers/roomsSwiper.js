const roomsSwiper = new Swiper('.RoomsGridSection__swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        }
    },
    navigation: {
        prevEl: ".swiper-button-prev",
        nextEl: ".swiper-button-next",
    },
    grid: {
        rows: 6,
        // fill: "row",
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            grid: {
                rows: 2,
                fill: 'row'
            },
            centeredSlides: false
        }
    }
});


// window.onload = function () {
//     const width = document.body.offsetWidth;
//     if (width >= 1000) {
//         roomsSwiper.params.centeredSlides = false
//         roomsSwiper.update()
//     } else {
//         roomsSwiper.params.centeredSlides = true
//         roomsSwiper.update()
//     }
// }
