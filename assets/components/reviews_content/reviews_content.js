import './reviews_content.scss';
import Swiper from 'swiper';

export let reviewsContentSwiper = new Swiper('.reviews-content__container', {
    slidesPerView: 1,
    effect: 'fade',
   fadeEffect: {
       crossFade: true
   },
    allowTouchMove: false,
    loop: true,
});
