<?php
/**
 * Template Name: Home
 */
get_header();

$mainMenuArgs = [
  'theme_location' => 'main_menu',
  'container' => false,
  'menu_class' => 'menu__list',
  'menu_id' => '',
  'echo' => true,
  'fallback_cb' => 'wp_page_menu',
  'before' => '',
  'after' => '',
  'link_before' => '',
  'link_after' => '',
  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth' => 2,
];

$options = SingletonOptions::getOptions();
$addresses= $options['mastak_addresses'];


?>
<header class="header ">
  <div class="header__inner">
    <a class="header__logo" href="#">
      <img class="header__img_logo" src="<?= $options["logo_black"]?>">
    </a>
    <div class="header__text">
      <span class="header__text-left"></span>
      <span class="header__text-right"></span>
    </div>
  </div>


  <?php get_template_part('core/views/rightMenu');?>

    <a class="header__burger" href="#">
        <span class="header__line-burger"></span>
        <span class="header__line-burger"></span>
    </a>
</header>
<div class="main-swiper">
  <div class="swiper-container main-swiper__container">
    <div class="swiper-wrapper main-swiper__wrapper">
      <div class="swiper-slide main-swiper__slide">
        <div class="video">
          <div class="video__container">
            <video src="<?= $options["background_video"];?>" muted loop autoplay width="100%" height="auto"></video>
          </div>
          <div class="video__content"><img class="video__img_logo" src="<?= $options["logo_white"];?>" alt="logo"></div>
        </div>
      </div>

      <div class="swiper-slide main-swiper__slide">
       <?php get_template_part('core/views/homeSlider');?>
      </div>

      <div class="swiper-slide main-swiper__slide">
        <div class="header-description"><span class="header-description__text header-description__text_color_black">what</span><span class="header-description__text header-description__text_color_red">we do</span></div>
        <div class="services">
          <div class="services__inner-wrap">
              <a class="services__item services__item_first" href="<?= $options["web_services_link"];?>">
                  <h1 class="services__title services__title_notebook">web services</h1>
                  <img class="services__img services__img_notebook" src="/wp-content/themes/mastak/src/icons/notebook.24b663.png" alt="notebook">
              </a>
            <div class="services__item_wrapper">
                <a class="services__item services__item_size services__item_color_light-grey" href="<?= $options["mobile_apps_link"];?>">
                    <h1 class="services__title services__title_mobile">mobile apps</h1>
                    <img class="services__img services__img_mobile" src="/wp-content/themes/mastak/src/icons/mobile.4ef35f.png" alt="mobile">
                </a>
                <a class="services__item services__item_size services__item_color_light-yellow" href="<?= $options["UX_UI_link"];?>">
                    <h1 class="services__title services__title_ux">UX / UI design</h1>
                    <img class="services__img services__img_ux" src="/wp-content/themes/mastak/src/icons/rubik.678f49.png" alt="rubik">
                </a>
                <a class="services__item services__item_size services__item_color_light-blue" href="<?= $options["brand_guidelines_link"];?>">
                    <h1 class="services__title services__title_brand">brand guidelines</h1>
                    <img class="services__img services__img_brand" src="/wp-content/themes/mastak/src/icons/group.148cd1.png" alt="brand">
                </a>
                <a class="services__item services__item_size services__item_wrapper-last services__item_color_light-green" href="<?= $options["pre_print_design_link"];?>">
                    <h1 class="services__title services__title_paper">pre-print design</h1>
                    <img class="services__img services__img_paper" src="/wp-content/themes/mastak/src/icons/paper.1f7f53.png" alt="paper">
                </a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide main-swiper__slide main-swiper__slide_background-image_last">
        <div class="header-description"><span class="header-description__text header-description__text_color_black">reviews</span><span class="header-description__text header-description__text_color_red">our clients</span></div>
        <div class="reviews">
          <div class="reviews__inner">
            <!--+reviewsSwiper()-->
            <!--+reviewsContent()-->
          </div>
        </div>

        <?php get_template_part('core/views/logosSlider');?>

        <div class="copyright copyright_margin_top"><span class="copyright__content">Copyright 2018 © All Rights Reserved.</span></div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();