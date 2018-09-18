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
    if (screen.width < 768) {
        menuProjects = new Swiper('.swiper-menu__container', {
            initialSlide: 1,
            centeredSlides: true,
            slidesPerView: 3,
            spaceBetween: 40,
            freeMode: true,
        });
        menuProjects.init();
    }
});

$($('.swiper-menu__slide')[activeMenu]).addClass('swiper-menu__slide_active');







