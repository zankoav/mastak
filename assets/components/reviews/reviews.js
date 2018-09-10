import './reviews.scss';
import './../reviews_swiper/reviews_swiper';
import './../reviews_content/reviews_content';
import {reviewsContentSwiper} from './../reviews_content/reviews_content';
import {reviewsSwiper} from './../reviews_swiper/reviews_swiper';
import $ from "jquery";

reviewsSwiper.on('slideChange', function () {
    $('.reviews-swiper__img_active').removeClass('reviews-swiper__img_active');
    $(this.slides[this.activeIndex + 1]).find('.reviews-swiper__img').addClass('reviews-swiper__img_active');

});


reviewsSwiper.on('slideNextTransitionStart', function () {
    reviewsContentSwiper.slideNext();
});


reviewsSwiper.on('slidePrevTransitionStart', function () {
    reviewsContentSwiper.slidePrev();
});