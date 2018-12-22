import './portfolios.scss';
import $ from 'jquery';


$('.portfolios__show-more-button').on('click', function (event) {

    event.preventDefault();

    let $items = $('.portfolio-card_added');

    for (let i = 0; i < Math.min($items.length, 3); i++) {
        $($items[i]).fadeIn(function () {
            $(this).removeClass('portfolio-card_added');
            if ($('.portfolio-card_added').length === 0) {
                $('.portfolios__show-more-plus').remove();
                $('.portfolios__show-more-button').remove();
            }
        });
    }
});