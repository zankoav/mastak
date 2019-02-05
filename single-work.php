<?php
global $post;
get_header();

$meta_options = get_post_meta( $post->ID );

$logo               = $meta_options['single_page_logo'][0];
$title_color        = $meta_options['main-title_color'][0];
$order_title_color  = $meta_options['order_title_color'][0];
$body_bgc           = $meta_options['body_bgc'][0];
$main_bg_img        = $meta_options['img_bgc'][0];
$note_img           = $meta_options['iMac_img'][0];
$iPhone_img         = $meta_options['iPhone_img'][0];
$welc_sec_add_img   = $meta_options['welc_sec_add_img'][0];
$customer_orders    = unserialize( $meta_options['customer_orders'][0] );
$project_goals      = unserialize( $meta_options['project_goal'][0] );
$welc_sec_add_img   = $meta_options['welc_sec_add_img'][0];
$techno_title_color = $meta_options['techno_title_color'][0];
$techno_bgp         = $meta_options['techno_bgp'][0];
$techno_shape       = $meta_options['techno_item_shape'][0];
$techno_list        = unserialize( $meta_options['technologies_list'][0] );


$cards = unserialize( $meta_options['cards'][0] );

//var_dump($meta_options);
?>
<body style="background:<?= $body_bgc; ?>;">
<div class="welcome" style="background-image:url(<?= $main_bg_img; ?>)">
	<div class="container">
		<div class="welcome__inner">

			<div class="welcome__title" style="color:<?= $title_color; ?>;"><?= $post->post_title ?></div>

			<div class="welcome__logo">
				<img class="welcome__photos-image" src="<?= $logo; ?>">
			</div>
		</div>
		<div class="welcome__wrapper">
			<div class="welcome__notebook">
				<img class="welcome__notebook-image" src="/wp-content/themes/mastak/src/icons/pk.fb5cf9.png">
				<img class="welcome__addition-image" src="<?= $welc_sec_add_img; ?>">
				<div class="welcome__main-notebook">
					<img class="welcome__main-notebook-image" src="<?= $note_img; ?>">
				</div>
				<div class="welcome__phone">
					<img class="welcome__phone-image" src="/wp-content/themes/mastak/src/icons/iphone-kg.697365.png">
					<div class="welcome__main-iphone">
						<img class="welcome__main-iphone-image" src="<?= $iPhone_img; ?>">
					</div>
				</div>
				<img class="welcome__shadow" src="/wp-content/themes/mastak/src/icons/shadow.08b3b3.svg">
			</div>
		</div>
	</div>
</div>
<div class="paragraph">
	<div class="container">

		<div class="paragraph__inner" style="color:<?= $order_title_color; ?>;">

			<div class="paragraph__title">что хотел заказчик:</div>
			<ul class="paragraph__list">
		  <?php foreach ( $customer_orders as $customer_order ) { ?>
						<li class="paragraph__item"><?= $customer_order; ?></li>
		  <?php } ?>
			</ul>
		</div>
	</div>
</div>
<div class="paragraph">
	<div class="container">

		<div class="paragraph__inner" style="color:<?= $order_title_color; ?>;">

			<div class="paragraph__title">цели проекта:</div>
			<ul class="paragraph__list">
		  <?php foreach ( $project_goals as $project_goal ) { ?>
						<li class="paragraph__item"><?= $project_goal; ?></li>
		  <?php } ?>
			</ul>
		</div>
	</div>
</div>
<div class="sections">
	<div class="sections__item">

		<img class="sections__image" src="<?= $techno_bgp; ?>">

		<div class="sections__wrapper">
			<div class="container">

				<div class="subtitle__text subtitle__text_position_right" data-text="Technologies used"
				     style="color:<?= $techno_title_color; ?>;">

					Technologies used
				</div>
				<div class="technologies">
					<div class="container">
						<ul class="technologies__list">
				<?php foreach ( $techno_list as $item ) : ?>
									<li class="technologies__item">
										<span class="technologies__name"><?= $item; ?></span>
										<span class="technologies__addition <?= $techno_shape == 'circle' ? 'technologies__addition_circle' : ''; ?>">
							</span>
									</li>
				<?php endforeach; ?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php foreach ( $cards as $card ) :
		$card_title = $card['title'];
		$card_position = $card['position'];
		$card_title_color = $card['title_color'];
		$card_bg_image = $card['bg_image'];
		?>
			<div class="sections__item">
				<img class="sections__image" src="<?= $card_bg_image; ?>">
				<div class="sections__wrapper">
					<div class="container">
						<div class="subtitle__text subtitle__text_position_<?= $card_position == 'left' ? 'left' : 'right' ?>"
						     data-text="<?= $card_title ?>"
						     style="color:<?= $card_title_color ?>;">
				<?= $card_title ?>
						</div>
					</div>
				</div>
			</div>
	<?php endforeach; ?>
</div>
<div class="copyright ">
	<span class="copyright__content">Copyright 2019 © All Rights Reserved.</span>
</div>
<?php

get_footer();