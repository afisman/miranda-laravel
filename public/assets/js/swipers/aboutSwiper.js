const facilitiesSwiper = new Swiper('.AboutFacilities__swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            grid: {
                rows: 3,
                fill: 'row'
            }
        }
    },
});

const counterSwiper = new Swiper('.AboutCounter__swiper', {
    slidesPerView: 1,
    spaceBetween: 30,

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        1000: {
            slidesPerView: 2,
        }
    }
});
