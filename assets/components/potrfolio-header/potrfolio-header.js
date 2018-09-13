import './potrfolio-header.scss';
import $ from 'jquery';

$('.potrfolio-header__burger').click(function (event) {
    event.preventDefault();
    $(this).toggleClass('potrfolio-header__burger_active');
    $('.menu').toggleClass('menu_active');
});