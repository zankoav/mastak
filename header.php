 <!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php
		if(is_tax('portfolio')){
	?>
	<title><?= get_queried_object()->name;?></title>
	<?php }else{?>
	<title><?= get_the_title();?></title>
  <?php }?>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>



