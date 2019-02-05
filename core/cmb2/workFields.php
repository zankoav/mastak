<?php

function work_fields_metabox() {
	$cmb = new_cmb2_box( array(
		'id'           => 'cmb2_text_email_metabox',
		'title'        => 'option fields',
		'object_types' => array( 'work' ),
	) );

//options for slide home page
	$cmb->add_field( array(
		'name' => 'Options for home page',
		'id'   => 'ot_home_options',
		'type' => 'title'
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


//options for slide home page
	$cmb->add_field( array(
		'name' => 'Options for list of works',
		'id'   => 'ot_home_options',
		'type' => 'title'
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

function single_work_page_metabox() {
	$cmb = new_cmb2_box( array(
		'id'           => 'single_work_page_meta',
		'title'        => 'single page fields',
		'object_types' => array( 'work' ),
	) );

//options for slide home page

	$cmb->add_field( array(
		'name' => 'Logo',
		'id'   => 'single_page_logo',
		'type' => 'file'
	) );

	$cmb->add_field( array(
		'name' => 'Body background color',
		'id'   => 'body_bgc',
		'type' => 'colorpicker'
	) );
	$cmb->add_field( array(
		'name' => 'main title color',
		'id'   => 'main-title_color',
		'type' => 'colorpicker'
	) );
	$cmb->add_field( array(
		'name' => 'Color of orders and goals titles',
		'id'   => 'order_title_color',
		'type' => 'colorpicker'
	) );

	$cmb->add_field( array(
		'name' => 'Background image',
		'id'   => 'img_bgc',
		'type' => 'file'
	) );
	$cmb->add_field( array(
		'name' => 'iMac background image',
		'id'   => 'iMac_img',
		'type' => 'file'
	) );
	$cmb->add_field( array(
		'name' => 'iPhone background image',
		'id'   => 'iPhone_img',
		'type' => 'file'
	) );
	$cmb->add_field( array(
		'name' => 'welcome section addition image',
		'id'   => 'welc_sec_add_img',
		'type' => 'file'
	) );

	$cmb->add_field( array(
		'name' => 'Что хотел заказчик:',
		'id'   => 'customer_orders',
		'type' => 'text',
		'repeatable' => true,
		'text' => array(
			'add_row_text' => 'order',
		),
	) );
	$cmb->add_field( array(
		'name' => 'Цели проекта:',
		'id'   => 'project_goal',
		'type' => 'text',
		'repeatable' => true,
		'text' => array(
			'add_row_text' => 'goal',
		),
	) );

	//Technologies used
	$cmb->add_field( array(
		'name' => 'Technologies used',
		'id'   => 'OT_technologies',
		'type' => 'title'
	) );
	$cmb->add_field( array(
		'name' => 'Title color',
		'id'   => 'techno_title_color',
		'type' => 'colorpicker'
	) );
	$cmb->add_field( array(
		'name' => 'Technologies background picture',
		'id'   => 'techno_bgp',
		'type' => 'file'
	) );
	$cmb->add_field( array(
		'name' => 'shape of list items',
		'id'   => 'techno_item_shape',
		'type'             => 'select',
		'show_option_none' => true,
		'default'          => 'cub',
		'options'          => array(
			'circle' => __( 'circle', 'cmb2' ),
			'cub'   => __( 'cub', 'cmb2' )
	) ));
	$cmb->add_field( array(
		'name' => 'color of start list',
		'id'   => 'color_list_start',
		'type' => 'colorpicker'
	) );
	$cmb->add_field( array(
		'name' => 'color of end list',
		'id'   => 'color_list_end',
		'type' => 'colorpicker'
	) );

//array cards
	$group_field_id = $cmb->add_field( array(
		'id'          => 'cards',
		'type'        => 'group',
		'description' => __( 'Generates reusable form entries', 'cmb2' ),
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'        => __( 'Add Another Entry', 'cmb2' ),
			'remove_button'     => __( 'Remove Entry', 'cmb2' ),
			'sortable'          => true, // beta
			'closed'         => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );
// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Entry Title',
		'id'   => 'title',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Entry Title position',
		'id'   => 'position',
		'type'             => 'select',
		'show_option_none' => true,
		'default'          => 'left',
		'options'          => array(
			'left' => __( 'left', 'cmb2' ),
			'right'   => __( 'right', 'cmb2' )
		) ));
	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Entry Title color',
		'id'   => 'title_color',
		'type' => 'colorpicker',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Entry background image',
		'id'   => 'bg_image',
		'type' => 'file',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

}

add_action( 'cmb2_admin_init', 'work_fields_metabox' );
add_action( 'cmb2_admin_init', 'single_work_page_metabox' );