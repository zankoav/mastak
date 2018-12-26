<?php
/**
 * Template Name: Tiser
 */


$options = SingletonOptions::getOptions();

get_header();
?>
	<body>
	<div class="tiser tiser_theme_mastak">
		<div class="tiser__logo tiser__logo_size_small"><a class="tiser__link" href="/"><img class="tiser__logo-img"
		                                                                                     src="/wp-content/themes/mastak/src/icons/MastakAnime-BW.8a3f31.gif"
		                                                                                     alt="mastakstudio"></a></div>
		<div class="tiser__content">
			<h1 class="tiser__title tiser__title_center">coming soon…</h1>
			<p class="tiser__description tiser__description_center">The website is under construction. We’ll be here soon with
				our new awesome site, subscribe to be notified.</p>
			<form class="tiser__form tiser__form_main">
				<div class="tiser__form-wrapper tiser__form-wrapper_main">
					<input class="tiser__email tiser__email_main" type="email" placeholder="Enter your e-mail…" name="email">
					<input class="tiser__submit tiser__submit_main" type="submit" value="Subscribe">
				</div>
			</form>
			<a class="tiser__download-price tiser__download-price_red" href="#"><img class="tiser__download-icon"
			                                                                         src="/wp-content/themes/mastak/src/icons/download.0460dd.svg"
			                                                                         alt="download"><span
					class="tiser__download-description tiser__download-description_text">Download presentation about us</span></a>
		</div>
		<img class="tiser__footer-image tiser__footer-image_bottom"
		     src="/wp-content/themes/mastak/src/icons/portfolio-xl.2c0521.png"><img
			class="tiser__shadow tiser__shadow_right-top"
			src="/wp-content/themes/mastak/src/icons/showdow-logo-lg.a916e0.png">
	</div>
<?php get_footer(); ?>