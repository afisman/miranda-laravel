const roomsListSwiper = new Swiper('.RoomsListSection__swiper', {
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
        fill: "row",
    },
});