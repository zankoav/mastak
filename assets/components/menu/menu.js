import './menu.scss';
import $ from 'jquery';

$('.header__burger').click(function (event) {
    event.preventDefault();
    $(this).toggleClass('header__burger_active');
    $('.menu').toggleClass('menu_active');
});