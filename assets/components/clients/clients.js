import './clients.scss';
import $ from 'jquery';

$('.clients__show-more-button').on('click', function (event) {

    event.preventDefault();
    console.log('click me');

    let $items = $('.client-card_added');

    for (let i = 0; i < Math.min($items.length, 3); i++) {
        $($items[i]).fadeIn(function () {
            $(this).removeClass('client-card_added');
            $(this).css("display", "flex");
            if ($('.client-card_added').length === 0) {
                $('.clients__show-more-plus').remove();
                $('.clients__show-more-button').remove();
            }
        });
    }
});