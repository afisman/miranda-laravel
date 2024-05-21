const swiper = new Swiper('.roomSection__swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    navigation: {
        prevEl: ".swiper-button-prev",
        nextEl: ".swiper-button-next",
    },
});

const featuresSwiper = new Swiper('.featuresSection__swiper', {
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
                rows: 2,
                fill: 'rows'
            },
            centeredSlides: false

        }
    },
});


const menuSwiper = new Swiper('.foodSection__body__swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    centeredSlides: true,
    navigation: {
        nextEl: ".buttons-menu__next",
        prevEl: ".buttons-menu__prev",

    }, lockClass: 'none',
    grid: {
        rows: 3,
        fill: "row",
    },
    breakpoints: {
        1000: {
            slidesPerView: 2,
            slidesPerGroup: 6,
            grid: {
                rows: 3,
                fill: 'rows'
            },
            centeredSlides: false

        }
    },
});

const imagesSwiper = new Swiper('.imagesSection__swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        1000: {
            slidesPerView: 3,
            centeredSlides: true
        }
    },
});

// window.onload = function () {
//     const width = document.body.offsetWidth;
//     if (width >= 1000) {

//         swiper.params.centeredSlides = false;
//         swiper.update()

//         menuSwiper.params.centeredSlides = false
//         menuSwiper.update()

//         imagesSwiper.params.pagination.clickable = false
//         imagesSwiper.update()
//     } else {

//         swiper.params.centeredSlides = false;
//         swiper.update()

//         menuSwiper.params.centeredSlides = true
//         menuSwiper.update()

//         imagesSwiper.params.pagination.clickable = true
//         imagesSwiper.update()
//     }
// }