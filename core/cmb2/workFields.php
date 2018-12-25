<?php

function  work_fields_metabox() {

  $cmb = new_cmb2_box( array(
    'id'           => 'cmb2_text_email_metabox',
    'title'        => 'Person Information',
    'object_types' => array( 'work' ),
  ) );

  $cmb->add_field( array(
    'name' => 'image for home slider',
    'id'   => 'image_slide',
    'type' => 'file',
    'desc' => 'image for slider on home page.',
  ) );
  $cmb->add_field( array(
    'name' => 'description for home slider',
    'id'   => 'description_slide',
    'type' => 'textarea',
    'desc' => 'description for slider on home page.',
  ) );
  $cmb->add_field( array(
    'name' => 'customer logo',
    'id'   => 'customer_image_slide',
    'type' => 'file',
    'desc' => 'customer image for slider on home page.',
  ) );


  $cmb->add_field( array(
    'name' => 'preview image',
    'id'   => 'long_image',
    'type' => 'file',
    'desc' => 'in portfolio page',
  ) );

  $cmb->add_field( array(
    'name' => 'short description',
    'id'   => 'short_desc',
    'type' => 'text',
    'desc' => 'in portfolio page.',
  ) );

}
add_action( 'cmb2_admin_init', 'work_fields_metabox' );