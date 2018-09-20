import './reviews_content.scss';
import Swiper from 'swiper';

export let reviewsContentSwiper = new Swiper('.reviews-content__container', {
    slidesPerView: 1,
    spaceBetween: 50,
    allowTouchMove: false,
    loop: true,
    speed: 1000,
    parallax: true,
});
