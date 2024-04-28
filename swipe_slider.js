// import Swiper from "swiper";

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    loop: true,
    
    autoplay: {

        delay: 2500,
        disableOnInteraction: false,
    },
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // },
});
var swiper2 = new Swiper(".mySwiper_img", {
    slidesPerView: 2,
    spaceBetween: 33,
    freeMode: true,
    loop: true,
    speed: 2500,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // },
});
var swiper3 = new Swiper(".mySwiper_petitions", {
    slidesPerView: 1,
    loop: true,
    
    autoplay: {

        delay: 2500,
        disableOnInteraction: false,
    },
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // },
});