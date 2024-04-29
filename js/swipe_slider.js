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
    slidesPerView: 1,
    spaceBetween: 33,
    freeMode: true,
    loop: true,
    speed: 2500,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    breakpoints:{
        800: {
            slidesPerView:2
        }
    }
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
var swiper4 = new Swiper(".mySwiper_video", {
    slidesPerView: 1,
    loop: true,
    
    navigation: {
        nextEl: ".btn_video_right",
        prevEl: ".btn_video_left",
    },
});