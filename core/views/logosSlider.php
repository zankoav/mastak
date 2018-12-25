<?php

$query = new WP_Query(  array( 'post_type'=>'customer'));
$customers = $query->get_posts();
$customers_meta = array();

foreach ($customers as $item){
  $customers_meta[]= get_post_meta($item->ID);
} 
?>

<div class="partners">
  <div class="swiper-container partners__container">
    <div class="swiper-wrapper partners__wrapper">

      <?php foreach ($customers_meta as $item):?>
      <div class="swiper-slide partners__slide">
        <img class="partners__logo" src="<?= $item ["customer_logo"][0];?>" alt="alfa">
      </div>
      <?php endforeach;?>

    </div>
  </div>
</div>
