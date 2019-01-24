<?php

get_header();

$options = SingletonOptions::getOptions();

$current_cat =  get_queried_object()->term_id;
//get terms list
$terms = get_terms( 'portfolio');
//var_dump($terms);

//get work list
$works = get_posts(
	array(
		'post_type' => 'work',
		'numberposts' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'portfolio',
				'field' => 'term_id',
				'terms' =>  $current_cat,
			)
		)
	)
);

$query      = new WP_Query( array( 'post_type' => 'work' ) );

//get meta for each work
$works_meta = array();
foreach ( $works as $item ) {
	$works_meta[] = get_post_meta( $item->ID );
}

$works_count = count( $works_meta );
for ($i = 0; $i < count($terms); $i++){
	if($terms[$i]->term_id == get_queried_object()->term_id)
		$current_term_index = $i;
}

?>
<header class="header container">
	<div class="header__inner">
		<a class="header__logo" href="/">
			<img class="header__img_logo" src="<?= $options["logo_black"] ?>">
		</a>
		<div class="header__text">
			<span class="header__text-left">our</span>
			<span class="header__text-right">potrfolio</span>
		</div>
	</div>

	<?php get_template_part( 'core/views/rightMenu' ); ?>

	<a class="header__burger" href="#"><span class="header__line-burger"></span><span
			class="header__line-burger"></span></a>
</header>
<div data-active-menu="<?= $current_term_index;?>"></div>
<div class="swiper-menu">
	<div class="swiper-container swiper-menu__container">
		<div class="swiper-wrapper swiper-menu__wrapper">
			<?php foreach ( $terms as $term ) : ?>

			<a class="swiper-slide swiper-menu__slide " href="<?=get_term_link($term->term_id);?>">
				<span><?=$term->name;?></span>
			</a>
			<?php endforeach;?>
		</div>
	</div>
	<div class="swiper-menu__underline"><span class="swiper-menu__underline_span"></span></div>
</div>

<div class="portfolios container">
	<div class="portfolios__inner">


		<?php
		$i           = 0;
		$repetitions = 15;
		if ( $repetitions > $works_count ) {
			$repetitions = $works_count;
		}
		for ( ; $i < $repetitions; $i ++ ):
			?>
			<div class="portfolios__item">
				<div class="portfolio-card ">
					<a class="portfolio-card__parallax-block" href="<?= get_permalink( $works[ $i ] ); ?>" target="_blank">
						<img class="portfolio-card__img" src="<?= $works_meta[ $i ]['long_image'][0] ?>">
					</a>
					<div class="portfolio-card__footer">
						<a class="portfolio-card__title" href="#" target="_blank"><?= $works[ $i ]->post_title; ?></a>
						<span class="portfolio-card__subtitle"><?= $works_meta[ $i ]['short_desc'][0]; ?></span>
					</div>
				</div>
			</div>
		<?php endfor; ?>


		<?
		if ( $works_count > 15 ):
			for ( ; $i < count( $works_meta ); $i ++ ):
				?>

				<div class="portfolios__item">
					<div class="portfolio-card portfolio-card_added">
						<a class="portfolio-card__parallax-block" href="<?= get_permalink( $works[ $i ] ); ?>" target="_blank">
							<img class="portfolio-card__img" src="<?= $works_meta[ $i ]['long_image'][0] ?>">
						</a>
						<div class="portfolio-card__footer">
							<a class="portfolio-card__title" href="#" target="_blank"><?= $works[ $i ]->post_title; ?></a>
							<span class="portfolio-card__subtitle"><?= $works_meta[ $i ]['short_desc'][0]; ?></span>
						</div>
					</div>
				</div>
			<?php endfor; endif; ?>

	</div>

	<?php if($works_count > 15):?>
		<div class="portfolios__more">
			<div class="portfolios__show-more-plus">+</div>
			<a class="portfolios__show-more-button" href="#">show more</a>
		</div>
	<?php endif;?>
</div>
<div class="copyright copyright_margin_top"><span class="copyright__content">Copyright 2018 © All Rights Reserved.</span></div>


<?php
get_footer();
?>
