<?php

$options = SingletonOptions::getOptions();
$slider = $options['mastak_portfolio_slider'];

$works_id = array();
$works_meta = array();
foreach ($slider as $item){
  $works_id[]= $item['portfolio_slide'];
  $works_meta[$item['portfolio_slide']] = get_post_meta($item['portfolio_slide']);
}

$query = new WP_Query(  array( 'post_type'=>'work', 'post__in' => $works_id ));
$works = $query->get_posts();

foreach ($works as $item){
  $works_meta[$item->ID]["title"] = $item->post_title;
}
?>


<div class="portfolio">

  <div class="swiper-container portfolio__image-slider">
    <div class="header-description header-description_portfolio">
      <span class="header-description__text header-description__text_color_white">our</span>
      <span class="header-description__text header-description__text_color_red">portfolio</span>
    </div>
    <div class="swiper-wrapper portfolio__image-wrapper">
      <?php foreach ($works_id as $item): ?>
      <div class="swiper-slide portfolio__image-slider-slide">
        <div class="portfolio__image-slider-slide-inner" style="background-image:url(<?= $works_meta[$item]["image_slide"][0];?>);"></div>
      </div>
      <?php endforeach;?>
    </div>
  </div>

  <div class="swiper-container portfolio__menu-slider">
    <div class="swiper-wrapper">
      <?php foreach ($works_id as $item):?>
      <div class="swiper-slide portfolio-menu-slide">
        <div class="portfolio-menu-slide__inner">
          <h2 class="portfolio-menu-slide__title">
            <?= $works_meta[$item]["title"];?>
          </h2>
          <p class="portfolio-menu-slide__description">
            <?= $works_meta[$item]["description_slide"][0];?>
          </p>
          <a class="portfolio-menu-slide__link" href="<?= get_permalink($item);?>">view</a>
          <img class="portfolio-menu-slide__logo" src="<?= $works_meta[$item]["customer_image_slide"][0];?>">
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <div class="portfolio__menu-navigation">
      <a class="portfolio__menu-slider-prev" href="#"></a>
      <span class="portfolio__menu-slider-couner">
        <span class="portfolio__menu-slider-index">01</span>
        <span class="portfolio__menu-slider-size">04</span>
      </span>
      <a class="portfolio__menu-slider-next" href="#"></a>
    </div>
  </div>

</div>