<?php

function  customer_fields_metabox() {

  $cmb = new_cmb2_box( array(
    'id'           => 'cmb2_customer_f',
    'title'        => 'Person Information',
    'object_types' => array( 'customer' ),
  ) );

  $cmb->add_field( array(
    'name' => 'customer logo',
    'id'   => 'customer_logo',
    'type' => 'file'
  ) );
  $cmb->add_field( array(
    'name' => 'customer background',
    'id'   => 'customer_background',
    'type' => 'file'
  ) );
  $cmb->add_field( array(
    'name' => 'link last project',
    'id'   => 'link_last_project',
    'type' => 'text_url',
    'default' => '#'
  ) );

}
add_action( 'cmb2_admin_init', 'customer_fields_metabox' );