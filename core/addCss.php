<?php

add_action('template_redirect', function () {

  add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('commons', Assets::getCss('common'), false, null);

    if (is_page_template('template-home.php')) {
      wp_enqueue_style('home', Assets::getCss('home'), false, null);
    }else if (is_page_template('template-clients.php')) {
      wp_enqueue_style('clients', Assets::getCss('clients'), false, null);
    }else if (is_tax('portfolio')) {
	    wp_enqueue_style('portfolio', Assets::getCss('portfolio'), false, null);
    }else if (is_page_template('template-services.php')) {
	    wp_enqueue_style('services', Assets::getCss('services'), false, null);
    }else if (is_page_template('template-tiser.php')) {
	    wp_enqueue_style('tiser', Assets::getCss('tiser'), false, null);
    }

  });
});