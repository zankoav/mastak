import './main-swiper.scss';
import Swiper from 'swiper';
import $ from 'jquery';

const $SIZE = $('.header').height() / 4;

export let mainSwiper = new Swiper('.main-swiper__container', {
    direction: 'vertical',
    mousewheel: true,
    allowTouchMove: false,
    breakpoints: {
        767: {
            mousewheel: false,
        },
    }
});

let documentHeight = $(document).height();
let cursorClass = null;

function cursorView(e) {
    $('.header').removeClass('main-swiper_cursor_up-white main-swiper_cursor_up-black');
    $('.main-swiper__container').removeClass('main-swiper_cursor_down-black main-swiper_cursor_down-white');
    let Y = e.pageY;
    if (Y <= $SIZE) {
        if (mainSwiper.activeIndex === 0) {
            cursorClass = '';
        } else if (mainSwiper.activeIndex === 1 ) {
            cursorClass = 'main-swiper_cursor_up-white';
        } else if (mainSwiper.activeIndex >= 2) {
            cursorClass = 'main-swiper_cursor_up-black';
        }
        $('.header').addClass(cursorClass);
    } else if (Y >= (documentHeight - $SIZE)) {
        if (mainSwiper.isEnd === true) {
            cursorClass = '';
        } else if (mainSwiper.activeIndex > 1) {
            cursorClass = 'main-swiper_cursor_down-black';
        } else {
            cursorClass = 'main-swiper_cursor_down-white';
        }
        $('.main-swiper__container').addClass(cursorClass);
    }
}

$(document).mousemove(cursorView);

$(document).click(function (e) {
    if (e.target.tagName == 'A' || $(e.target).parent('a').length) {
        return;
    }
    let Y = e.pageY;
    if (Y <= $SIZE) {
        mainSwiper.slidePrev();
    } else if (Y >= (documentHeight - $SIZE)) {
        mainSwiper.slideNext();
    }
});

mainSwiper.on('slideChangeTransitionEnd', function () {
    $('.header').hide();
    $(document).off('mousemove', cursorView);
});

mainSwiper.on('slideChangeTransitionEnd', function () {
    $('.header').fadeIn(800);
    if (mainSwiper.activeIndex > 1) {
        $('.header__line-burger').attr('class', 'header__line-burger header__line-burger_black');
    } else {
        $('.header__line-burger').attr('class', 'header__line-burger');
    }
    $(document).mousemove(cursorView);
});
