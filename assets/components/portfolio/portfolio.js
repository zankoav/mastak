import './portfolio.scss';
import Swiper from 'swiper';
import $ from "jquery";

let imagesSwiper = new Swiper('.portfolio__image-slider', {
    slidesPerView: 1,
    effect: 'fade',
    allowTouchMove: false,
    autoResize: false,
    resizeReInit: true,
});

export let menuSwiper = new Swiper('.portfolio__menu-slider', {
    slidesPerView: 1,
    effect: 'fade',
    allowTouchMove: false,
    autoResize: false,
    resizeReInit: true,
    navigation: {
        nextEl: '.portfolio__menu-slider-next',
        prevEl: '.portfolio__menu-slider-prev',
    },
});

menuSwiper.on('slideChange', function () {
    $('.portfolio__menu-slider-index').html(withZero(this.realIndex + 1));
    imagesSwiper.slideTo(this.realIndex);
});

$(window).resize(function () {
    imagesSwiper.destroy(false, true);
    imagesSwiper = new Swiper('.portfolio__image-slider', {
        slidesPerView: 1,
        effect: 'fade',
        initialSlide: menuSwiper.realIndex,
        allowTouchMove: false,
        autoResize: false,
        resizeReInit: true,
    });
    imagesSwiper.init();
});

$('.portfolio__menu-slider-size').html(
    withZero($('.portfolio-menu-slide').length)
);

function withZero(number) {
    return number > 9 ? number : '0' + number;
}

