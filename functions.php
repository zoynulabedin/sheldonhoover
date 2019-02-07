<?php
/*This file is part of sheldonhoover, Divi child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'divi_child_setup' ) ) :

	function divi_child_setup() {

		register_nav_menus( array(
			'child_menu' => esc_html__( 'Main Menu', 'sheldonhoover' ),
		
		) );

	}
endif;
add_action( 'after_setup_theme', 'divi_child_setup' );


function sheldonhoover_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
		wp_enqueue_script( 'bootsrap-js',  get_stylesheet_directory_uri(). '/assets/js/bootstrap.min.js', array( 'jquery' ), null, true );
	}
add_action( 'wp_enqueue_scripts', 'sheldonhoover_enqueue_child_styles' );


/*** ACF OPTIONS PAGE */
if(function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Divi Header',
		'icon_url' => get_stylesheet_directory_uri().'/assets/img/divi.png',
	));
  }

/*Write here your own functions */
