import './menu-type2.scss';
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

$($('.swiper-menu__link')[activeMenu]).addClass('swiper-menu__link_active');







