<?php

	define( "THEME_DIR", get_template_directory() );
	define( "THEME_URI", get_template_directory_uri() );

	define( "ASSETS", THEME_DIR . '/src/assets.json' );

	define( "THEME_NAME", "mastak" );

	require_once THEME_DIR . '/core/init_theme.php';
	require_once THEME_DIR . '/core/custom_types.php';
	require_once THEME_DIR . '/core/contact_form7.php';
