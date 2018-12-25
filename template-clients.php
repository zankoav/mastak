<?php
/**
 * Template Name: Clients
 */
$options = SingletonOptions::getOptions();


$query = new WP_Query(  array( 'post_type'=>'customer'));
$customers = $query->get_posts();
$customers_meta = array();

foreach ($customers as $item){
    $customers_meta[]= get_post_meta($item->ID);
}
$customers_count = count($customers_meta);

get_header();

?>
    <header class="header container">
        <div class="header__inner">
            <a class="header__logo" href="/">
                <img class="header__img_logo" src="<?= $options["logo_black"]?>">
            </a>
            <div class="header__text">
                <span class="header__text-left">our</span>
                <span class="header__text-right">clients</span>
            </div>
        </div>

      <?php get_template_part('core/views/rightMenu');?>

        <a class="header__burger" href="#">
            <span class="header__line-burger"></span>
            <span class="header__line-burger"></span>
        </a>
    </header>
    <div class="clients container">
        <div class="clients__inner">

            <?php
                $i=0;
                $repetitions=15;
                if($repetitions>$customers_count){
                    $repetitions=$customers_count;
                }
                for ( ; $i<$repetitions ; $i++):
            ?>
            <div class="clients__item">
                <a class="client-card " href="<?= $customers_meta[$i]["link_last_project"][0]?>" target="_blank" style="background-image:url(<?= $customers_meta[$i]["customer_background"][0]?>)">
                    <div class="client-card__background-color"></div>
                    <img class="client-card__icon" src="<?= $customers_meta[$i]["customer_logo"][0]?>">
                    <span class="client-card__text">View last project</span>
                </a>
            </div>
            <?php endfor;?>
            <?
                if($customers_count>15):
                for ( ; $i<count($customers_meta) ; $i++):
            ?>
            <div class="clients__item">
                <a class="client-card client-card_added" href="<?= $customers_meta[$i]["link_last_project"][0]?>" target="_blank" style="background-image:url(<?= $customers_meta[$i]["customer_background"][0]?>)">
                    <div class="client-card__background-color"></div>
                    <img class="client-card__icon" src="<?= $customers_meta[$i]["customer_logo"][0]?>">
                    <span class="client-card__text">View last project</span>
                </a>
            </div>
            <?php endfor; endif;?>
        </div>
        <div class="clients__more">
            <div class="clients__show-more-plus">+</div>
            <a class="clients__show-more-button" href="#">show more</a>
        </div>
    </div>
    <div class="copyright "><span class="copyright__content">Copyright 2018 © All Rights Reserved.</span></div>
<?php get_footer(); ?>