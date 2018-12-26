<?php
/**
 * Template Name: Services
 */
$options = SingletonOptions::getOptions();

get_header();
?>

<header class="header container">
	<div class="header__inner">
		<a class="header__logo" href="/">
			<img class="header__img_logo" src="<?= $options["logo_black"]?>">
		</a>
		<div class="header__text">
			<span class="header__text-left">what</span>
			<span class="header__text-right">we do</span>
		</div>
	</div>

	<?php get_template_part('core/views/rightMenu');?>


	<a class="header__burger" href="#">
		<span class="header__line-burger"></span>
		<span class="header__line-burger"></span>
	</a>
</header>
<div class="mastak-title">
	<div class="container">
		<div class="mastak-title__title">Development process</div>
		<div class="mastak-title__subtitle">from idea to launch</div>
	</div>
</div>
<div class="copyright ">
	<span class="copyright__content">Copyright 2018 © All Rights Reserved.</span>
</div>
<?php get_footer();?>
