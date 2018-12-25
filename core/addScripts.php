<?php


add_action('template_redirect', function () {

  add_action('wp_enqueue_scripts', function () {

    wp_enqueue_script('commons', Assets::getJs('common'), false, null, true);

    if (is_page_template('template-home.php')) {
      wp_enqueue_script('home', Assets::getJs('home'), false, null, true);
    }else if (is_page_template('template-clients.php')) {
      wp_enqueue_script('clients', Assets::getJs('clients'), false, null, true);
    }

  });
});