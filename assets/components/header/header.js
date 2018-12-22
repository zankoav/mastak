import './header.scss';
import $ from "jquery";

const DELTA_Y = 60;
const MEDIA_SM = 768;

let $header = $('.header');
let $services_section = $('.services');
let $reviews_section = $('.reviews');
let $portfolio_section = $('.portfolio');

$(window).scroll(function () {

    let scroll = $(window).scrollTop();

    if ($portfolio_section.offset().top - DELTA_Y <= scroll && $services_section.offset().top > scroll) {

        $('.header__text-left').html('our');
        $('.header__text-right').html('portfolio');
    }

    if ($services_section.offset().top - DELTA_Y <= scroll && $reviews_section.offset().top > scroll) {
        $('.header__text-left').html('what');
        $('.header__text-right').html('we do');
    }

    if ($reviews_section.offset().top - DELTA_Y <= scroll) {
        $('.header__text-left').html('reviews');
        $('.header__text-right').html('our clients');
    }

    if (screen.width < MEDIA_SM && scroll > screen.height - DELTA_Y) {
        $header.addClass('header_replace-color');
        return;
    }

    $header.removeClass('header_replace-color');
});

