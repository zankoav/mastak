<?php


add_action('cmb2_admin_init', 'gifty_register_theme_options_metabox');

function gifty_register_theme_options_metabox()
{
  /**
   * Registers options page menu item and form.
   */
  $cmb_options = new_cmb2_box(array(
    'id' => THEME_NAME . '_theme_options_page',
    'title' => esc_html__('Настройки темы', THEME_NAME),
    'object_types' => array('options-page'),

    'option_key' => THEME_NAME . '_theme_options',
    'icon_url' => 'dashicons-palmtree',
  ));

//logo
  $cmb_options->add_field(array(
    'name' => 'logos',
    'type' => 'title',
    'id' => 'logo_title'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('black logo', THEME_NAME),
    'id' => 'logo_black',
    'type' => 'file'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('white logo', THEME_NAME),
    'id' => 'logo_white',
    'type' => 'file'
  ));

//logo
  $cmb_options->add_field(array(
    'name' => 'background video',
    'type' => 'title',
    'id' => 'video_title'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('video', THEME_NAME),
    'id' => 'background_video',
    'type' => 'file'
  ));

//social links
  $cmb_options->add_field(array(
    'name' => 'social links',
    'type' => 'title',
    'id' => 'social_links'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('vKontacte', THEME_NAME),
    'id' => 'vk_link',
    'type' => 'text',
    'default' => 'http://www.vk.com/'

  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('instangram', THEME_NAME),
    'id' => 'insta_link',
    'type' => 'text',
    'default' => 'https://www.instagram.com/'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('twitter', THEME_NAME),
    'id' => 'twitter_link',
    'type' => 'text',
    'default' => 'https://www.twitter.com/'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('facebook', THEME_NAME),
    'id' => 'fb_link',
    'type' => 'text',
    'default' => 'https://www.facebook.com/'
  ));

//contacts list
  $cmb_options->add_field(array(
    'name' => 'addresses',
    'type' => 'title',
    'id' => THEME_NAME.'addresses_title'
  ));
  $contact = $cmb_options->add_field(array(
    'id' => THEME_NAME . '_addresses',
    'type' => 'group',
    'options' => array(
      'group_title' => __('Address {#}', THEME_NAME),
      'add_button' => __('Add Another Address', THEME_NAME),
      'remove_button' => __('Remove Address', THEME_NAME),
      'sortable' => true,
      'closed' => true,
    ),
  ));

  $cmb_options->add_group_field($contact, array(
    'name' => 'address title',
    'id' => 'address_title',
    'type' => 'text'
  ));
  $cmb_options->add_group_field($contact, array(
    'name' => 'address',
    'id' => 'address',
    'type' => 'text'
  ));
  $cmb_options->add_group_field($contact, array(
    'name' => 'phone',
    'id' => 'contact_phone',
    'type' => 'text'
  ));
  $cmb_options->add_group_field($contact, array(
    'name' => 'email',
    'id' => 'contact_email',
    'type' => 'text_email'
  ));

//portfolio slider
  $cmb_options->add_field(array(
    'name' => 'portfolio slider',
    'type' => 'title',
    'id' => THEME_NAME.'portfolio_slider_title'
  ));
  $portfolio_slider = $cmb_options->add_field(array(
    'id' => THEME_NAME . '_portfolio_slider',
    'type' => 'group',
    'options' => array(
      'group_title' => __('Slide {#}', THEME_NAME),
      'add_button' => __('Add Another Slide', THEME_NAME),
      'remove_button' => __('Remove Slide', THEME_NAME),
      'sortable' => true,
      'closed' => true,
    ),
  ));

  $cmb_options->add_group_field($portfolio_slider, array(

    'name' => 'work',
    'id' => 'portfolio_slide',
    'type' => 'select',
    'show_option_none' => true,
    'options_cb' => 'show_cat_or_dog_options'
  ));
  function show_cat_or_dog_options( $field ) {
    $query = new WP_Query( array( 'post_type'=> 'work' ) );
    $works = $query->get_posts();

    $result= array();
      foreach ($works as $item){
        $result[$item->ID] =  $item->post_title;
      }
    return $result;
  }

//logo
  $cmb_options->add_field(array(
    'name' => 'what we do',
    'type' => 'title',
    'id' => THEME_NAME.'_what_we_do_title'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('web services', THEME_NAME),
    'id' => 'web_services_link',
    'type' => 'text_url',
    'default' => '#'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('mobile apps', THEME_NAME),
    'id' => 'mobile_apps_link',
    'type' => 'text_url',
    'default' => '#'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('UX / UI design', THEME_NAME),
    'id' => 'UX_UI_link',
    'type' => 'text_url',
    'default' => '#'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('brand guidelines', THEME_NAME),
    'id' => 'brand_guidelines_link',
    'type' => 'text_url',
    'default' => '#'
  ));
  $cmb_options->add_field(array(
    'name' => esc_html__('pre-print design', THEME_NAME),
    'id' => 'pre_print_design_link',
    'type' => 'text_url',
    'default' => '#'
  ));
}