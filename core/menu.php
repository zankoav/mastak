<?php
add_action( 'after_setup_theme', function () {
  register_nav_menus( array(
    'main_menu'   => 'Главное Меню'
  ) );
} );

add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 3 );
function custom_nav_menu_css_class( $classes, $item , $args) {

  array_push( $classes, 'menu__list-item' );

  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'menu__item_active ';
  }
  return $classes;
}

add_filter( 'nav_menu_link_attributes', 'filter_function_name_3020', 10, 4 );
function filter_function_name_3020( $atts, $item, $args, $depth ){
  $atts['class'] = "menu__list-item-link";
  return $atts;
}