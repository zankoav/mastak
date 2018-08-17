<?php


	function get_assets() {
		return json_decode( file_get_contents( ASSETS ) );
	}

	add_action( 'template_redirect', function () {

		add_action( 'wp_enqueue_scripts', function () {

			$assets = get_assets();

			wp_enqueue_style( 'commons', THEME_URI.$assets->common->css, false, null );
			wp_enqueue_script( 'commons', THEME_URI.$assets->common->js, false, null, true );

			if ( is_front_page() ) {
				wp_enqueue_style( 'tiser', THEME_URI.$assets->tiser->css, false, null );
				wp_enqueue_script( 'tiser', THEME_URI.$assets->tiser->js, false, null, true );
			}elseif (is_404()){
				wp_enqueue_style( 'error404', THEME_URI.$assets->page404->css, false, null );
				wp_enqueue_script( 'error404', THEME_URI.$assets->page404->js, false, null, true );
			}

			wp_enqueue_style( 'style', THEME_URI . '/style.css', false, null );
		} );
	} );

	add_action( 'after_setup_theme', 'molotok_theme_init');

	function molotok_theme_init(){
		/**
		 * add title tag auto
		 */
		add_theme_support( 'title-tag' );

		/**
		 * add thumbnails for all post types
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * add custom-logo in customizer
		 */
		add_theme_support( 'custom-logo' );

		/**
		 * add html5 support
		 */
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	}