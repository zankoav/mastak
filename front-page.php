<?php
	$email        = get_option( 'mastak_theme_options' )['mastak_theme_options_email'];
	$presentation = get_option( 'mastak_theme_options' )['presentation'];
	get_header();
?>
<div class="tiser tiser_theme_mastak">
    <div class="tiser__logo tiser__logo_size_small">
        <a href="<?= site_url() ?>" class="tiser__link">
            <img class="tiser__logo-img" src="/wp-content/themes/mastak/src/icons/MastakAnime-BW.8a3f31.gif"
                 alt="mastakstudio">
        </a>
        <a class="tiser__email tiser__email_after-logo" href="mailto:<?= $email; ?>"><?= $email; ?></a>
    </div>
    <div class="tiser__content">
        <h1 class="tiser__title tiser__title_center">coming soon…</h1>
        <p class="tiser__description tiser__description_center">The website is under construction. We’ll be here soon
            with our new awesome site, subscribe to be notified.</p>
		<?php echo do_shortcode( '[contact-form-7 id="5" title="Subscribe" html_class="tiser__form tiser__form_main"]' ); ?>
        <a class="tiser__download-price tiser__download-price_red" href="<?= $presentation; ?>">
            <img class="tiser__download-icon" src="/wp-content/themes/mastak/src/icons/download.0460dd.svg"
                 alt="download">
            <span class="tiser__download-description tiser__download-description_text">Download presentation about us</span>
        </a>
    </div>
    <img class="tiser__footer-image tiser__footer-image_bottom"
         src="/wp-content/themes/mastak/src/icons/portfolio-xl.2c0521.png">
    <img
            class="tiser__shadow tiser__shadow_right-top"
            src="/wp-content/themes/mastak/src/icons/showdow-logo-lg.a916e0.png">
</div>
<?php get_footer(); ?>
