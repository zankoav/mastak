import './menu-projects.scss';
import Swiper from 'swiper';
import $ from "jquery";

let menuProjects = null;
let activeMenu = $('div[data-active-menu]').data('active-menu');
if (screen.width < 768) {
    menuProjects = new Swiper('.swiper-menu__container', {
        initialSlide: activeMenu,
        centeredSlides: true,
        slidesPerView: 'auto',
        spaceBetween: 30,
        freeMode: true,
    });
}

$(window).resize(function () {
    menuProjects.destroy(false, true);
    menuProjects.init();
});

$($('.swiper-menu__slide')[activeMenu]).addClass('swiper-menu__slide_active');


let $activeItem = $('.swiper-menu__slide_active span');
let delta = 32;
let leftItem = $activeItem.offset().left;
let left = leftItem - delta + $activeItem.width()/2,
    width = $activeItem.width() + 2 * delta;



    $('.swiper-menu__underline span').css({
        'margin-left': left + delta,
        'width': 0,
        'transition': 'all 1s ease-in-out'
    });


    $('.swiper-menu__underline span').css({
        'margin-left': (leftItem - delta),
        'width': width ,
        'transition': 'all 1s ease-in-out'
    });


function getSlider() {

    let $span = $(this).find('span');
    let left = $span.offset().left - delta,
        width = $span.width() + 2 * delta;

    $('.swiper-menu__underline span').css({
        'margin-left': left,
        'width': width,

    });
}

$('.swiper-menu__wrapper .swiper-menu__slide').hover(getSlider);


// $('.swiper-menu__wrapper .swiper-menu__slide').hover(function () {
//     $($('.swiper-menu__slide')[activeMenu]).addClass('swiper-menu__underline');
//
// });
