<?php
	/**
	 * The template for displaying 404 pages (not found)
	 *
	 */
	get_header(); ?>

<div class="page404 page404_theme_mastak">
    <img class="page404__shadow page404__shadow_right-top"
         src="/wp-content/themes/mastak/src/icons/showdow-logo-lg.a916e0.png">
    <div class="container page404__content page404__content_main">
        <nav class="menu menu_main"><a href="<?= site_url()?>" class="menu__link menu__link_back-home" ><img
                        class="menu__logo menu__logo_mastak" src="/wp-content/themes/mastak/src/icons/logo.ee3ce5.png"></a>
        </nav>
        <div class="page404__message page404__message_content">
            <div class="page404__message page404__message_error"><span
                        class="page404__text404 page404__text404_text">404</span></div>
            <div class="page404__description page404__description_text">A mistake. We do not have such a page..</div>
        </div>
        <div class="page404__copyright page404__copyright_bottom">Copyright 2018 © All Rights Reserved.</div>
    </div>
</div>

<?php get_footer(); ?>
