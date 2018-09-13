import './menu.scss';
import $ from 'jquery';
import {mainSwiper} from "./../main_swiper/main_swiper";

$('.header__burger').click(function (event) {
    event.preventDefault();
    $(this).toggleClass('header__burger_active');
    $('.menu').toggleClass('menu_active');

    if(mainSwiper.realIndex === 1){
        $('.header__line-burger').toggleClass('header__line-burger_black');
    }

    if(screen.width >= 768){
        $('.portfolio__menu-slider').fadeToggle();
    }
});