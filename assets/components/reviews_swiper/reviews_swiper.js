import './reviews_swiper.scss';
import Swiper from 'swiper';
import $ from 'jquery';

export let reviewsSwiper = new Swiper('.reviews-swiper__container', {
    direction: 'vertical',
    loop: true,
    slidesPerView: 3,
    speed: 600,
    parallax: true,
    allowTouchMove: false,
    breakpoints: {
        767: {
            direction: 'horizontal',
            allowTouchMove: true,
        },
    },
    navigation: {
        nextEl: '.reviews-swiper__button_next',
        prevEl: '.reviews-swiper__button_prev',
    },
});

reviewsSwiper.on('slideChange', function () {
    $('.reviews-swiper__img_active').removeClass('reviews-swiper__img_active');
    $(this.slides[this.activeIndex + 1]).find('.reviews-swiper__img').addClass('reviews-swiper__img_active');
});

