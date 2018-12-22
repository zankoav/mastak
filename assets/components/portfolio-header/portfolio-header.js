import './portfolio-header.scss';
import $ from 'jquery';

$('.portfolio-header__burger').click(function (event) {
    event.preventDefault();
    $(this).toggleClass('portfolio-header__burger_active');
    $('.menu').toggleClass('menu_active');
});