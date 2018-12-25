<?php

get_header();
$options = SingletonOptions::getOptions();

?>


<header class="header container">
    <div class="header__inner">
        <a class="header__logo" href="/">
            <img class="header__img_logo"  src="<?= $options["logo_black"] ?>">
        </a>
        <div class="header__text">
            <span class="header__text-left">our</span>
            <span class="header__text-right">potrfolio</span>
        </div>
    </div>

  <?php get_template_part('core/views/rightMenu');?>

    <a class="header__burger" href="#"><span class="header__line-burger"></span><span
                class="header__line-burger"></span></a>
</header>
<div data-active-menu="2"></div>
<div class="swiper-menu">
    <div class="swiper-container swiper-menu__container">
        <div class="swiper-wrapper swiper-menu__wrapper"><a class="swiper-slide swiper-menu__slide" href="#"><span>All projects</span></a><a
                    class="swiper-slide swiper-menu__slide" href="#"><span>Web developing</span></a><a
                    class="swiper-slide swiper-menu__slide" href="#"><span>Mobile developing</span></a><a
                    class="swiper-slide swiper-menu__slide" href="#"><span>UX / UI design</span></a><a
                    class="swiper-slide swiper-menu__slide" href="#"><span>Branding</span></a>
        </div>
    </div>
    <div class="swiper-menu__underline"><span class="swiper-menu__underline_span"></span></div>
</div>
<div class="portfolios container">
    <div class="portfolios__inner">

        <div class="portfolios__item">
            <div class="portfolio-card ">
                <a class="portfolio-card__parallax-block" href="#" target="_blank">
                    <img class="portfolio-card__img" src="/wp-content/themes/mastak/src/icons/molotok-2@3x.dd4148.png">
                </a>
                <div class="portfolio-card__footer">
                    <a class="portfolio-card__title" href="#" target="_blank">Molotok</a>
                    <span class="portfolio-card__subtitle">Promo site for MTBank</span>
                </div>
            </div>
        </div>

        <div class="portfolios__item">
            <div class="portfolio-card "><a class="portfolio-card__parallax-block" href="#" target="_blank"><img
                            class="portfolio-card__img" src="/wp-content/themes/mastak/src/icons/re-box@3x.c038e9.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#"
                                                       target="_blank">ReBOX</a><span class="portfolio-card__subtitle">Service for order delivery products</span>
                </div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card "><a class="portfolio-card__parallax-block" href="#" target="_blank"><img
                            class="portfolio-card__img"
                            src="/wp-content/themes/mastak/src/icons/krasnogorka@3x.fc6b5a.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">Krasnogorka</a><span
                            class="portfolio-card__subtitle">Web-site for rent houses</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card "><a class="portfolio-card__parallax-block" href="#" target="_blank"><img
                            class="portfolio-card__img" src="/wp-content/themes/mastak/src/icons/brutto@3x.712c39.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">Brutto
                        watch</a><span class="portfolio-card__subtitle">Promo site of watches</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card "><a class="portfolio-card__parallax-block" href="#" target="_blank"><img
                            class="portfolio-card__img" src="/wp-content/themes/mastak/src/icons/achosa@3x.58311f.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">Achosa</a><span
                            class="portfolio-card__subtitle">Women's clothing catalog</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card "><a class="portfolio-card__parallax-block" href="#" target="_blank"><img
                            class="portfolio-card__img"
                            src="/wp-content/themes/mastak/src/icons/6-tastes@3x.dfd5a4.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">6
                        tastes</a><span class="portfolio-card__subtitle">Free food delivery web-catalog</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card "><a class="portfolio-card__parallax-block" href="#" target="_blank"><img
                            class="portfolio-card__img"
                            src="/wp-content/themes/mastak/src/icons/pro-sushi@3x.dadf75.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#"
                                                       target="_blank">ProSushi</a><span
                            class="portfolio-card__subtitle">Сacheback service</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card "><a class="portfolio-card__parallax-block" href="#" target="_blank"><img
                            class="portfolio-card__img"
                            src="/wp-content/themes/mastak/src/icons/tm-images@3x.7f8f83.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">TM
                        site</a><span class="portfolio-card__subtitle">Web-site for tourist services</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card "><a class="portfolio-card__parallax-block" href="#" target="_blank"><img
                            class="portfolio-card__img" src="/wp-content/themes/mastak/src/icons/mobiles@3x.11a931.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#"
                                                       target="_blank">Mobiles.by</a><span
                            class="portfolio-card__subtitle">Brandbook for logistic company</span></div>
            </div>
        </div>

        <div class="portfolios__item">
            <div class="portfolio-card portfolio-card_added">
                <a class="portfolio-card__parallax-block" href="#" target="_blank">
                    <img class="portfolio-card__img" src="/wp-content/themes/mastak/src/icons/spivakov@3x.5ac166.png">
                </a>
                <div class="portfolio-card__footer">
                    <a class="portfolio-card__title" href="#" target="_blank">Spivakov</a>
                    <span class="portfolio-card__subtitle">Promo site of festival</span>
                </div>
            </div>
        </div>

        <div class="portfolios__item">
            <div class="portfolio-card portfolio-card_added"><a class="portfolio-card__parallax-block" href="#"
                                                                target="_blank"><img class="portfolio-card__img"
                                                                                     src="/wp-content/themes/mastak/src/icons/secret-discounter@3x.2b66b7.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">SecretDiscounter</a><span
                            class="portfolio-card__subtitle">Сacheback service</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card portfolio-card_added"><a class="portfolio-card__parallax-block" href="#"
                                                                target="_blank"><img class="portfolio-card__img"
                                                                                     src="/wp-content/themes/mastak/src/icons/port-europa@3x.cd6f36.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">Port
                        Europa</a><span class="portfolio-card__subtitle">Brandbook for logistic company</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card portfolio-card_added"><a class="portfolio-card__parallax-block" href="#"
                                                                target="_blank"><img class="portfolio-card__img"
                                                                                     src="/wp-content/themes/mastak/src/icons/vier-nik-1588@3x.6d1665.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">Vieršnik
                        1588</a><span class="portfolio-card__subtitle">Promo site of watches</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card portfolio-card_added"><a class="portfolio-card__parallax-block" href="#"
                                                                target="_blank"><img class="portfolio-card__img"
                                                                                     src="/wp-content/themes/mastak/src/icons/agroinfo@3x.a549e6.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#"
                                                       target="_blank">Agroinfo</a><span
                            class="portfolio-card__subtitle">Web-site for tourist services</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card portfolio-card_added"><a class="portfolio-card__parallax-block" href="#"
                                                                target="_blank"><img class="portfolio-card__img"
                                                                                     src="/wp-content/themes/mastak/src/icons/nasty-cat-app@3x.a8a7de.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">NastyCat -
                        App</a><span class="portfolio-card__subtitle">Brandbook for logistic company</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card portfolio-card_added"><a class="portfolio-card__parallax-block" href="#"
                                                                target="_blank"><img class="portfolio-card__img"
                                                                                     src="/wp-content/themes/mastak/src/icons/ortho-line-app@3x.409275.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">OrthoLine
                        - App</a><span class="portfolio-card__subtitle">Promo site of watches</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card portfolio-card_added"><a class="portfolio-card__parallax-block" href="#"
                                                                target="_blank"><img class="portfolio-card__img"
                                                                                     src="/wp-content/themes/mastak/src/icons/6-tastes-app@3x.9adba6.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">6 tastes -
                        App</a><span class="portfolio-card__subtitle">Web-site for tourist services</span></div>
            </div>
        </div>
        <div class="portfolios__item">
            <div class="portfolio-card portfolio-card_added"><a class="portfolio-card__parallax-block" href="#"
                                                                target="_blank"><img class="portfolio-card__img"
                                                                                     src="/wp-content/themes/mastak/src/icons/agroinfo-catalog@3x.529f5e.png"></a>
                <div class="portfolio-card__footer"><a class="portfolio-card__title" href="#" target="_blank">Agroinfo
                        Catalog</a><span class="portfolio-card__subtitle">Brandbook for logistic company</span></div>
            </div>
        </div>
    </div>
    <div class="portfolios__more">
        <div class="portfolios__show-more-plus">+</div>
        <a class="portfolios__show-more-button" href="#">show more</a>
    </div>
</div>


<?php get_footer(); ?>
