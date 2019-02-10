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
		wp_enqueue_script( 'child-scripts',  get_stylesheet_directory_uri(). '/assets/js/child-scripts.js', array(), null, true );
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


/* customize login screen */
function shhcl_custom_login_page() {
    echo '<style type="text/css">
	    .login { 
	    	background-image:url("'. get_stylesheet_directory_uri().'/assets/img/g.jpg") !important; 
	    	background-repeat: no-repeat !important; 
	    	background-attachment: fixed !important; 
	    	background-position: center !important; 
	    	background-size: cover !important; 
	    	position: relative; 
	    	z-index: 999;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
	    }
	    .login:before { 
  			background-color: rgba(0,0,0,0.7); 
  			position: absolute; 
  			width: 100%; 
  			height: 100%; 
  			left: 0; 
  			top: 0; 
  			content: ""; 
  			z-index: -1; 
  		}
	    .login h1 {
		    height: 100px;
		}
		.login h1:before { 
			content: "" !important; 
			display: block !important; 
			background: rgba(255,255,255, 0.2) !important; 
			height: 100px !important;
			width: 100% !important; 
			margin: 0 auto !important; 
			top: 0 !important; 
			-webkit-border-radius: 14px 14px 0 0 !important; 
			border-radius: 14px 14px 0 0 !important; 
			position: relative !important; 
			z-index: -1 !important; 
		}
        .login h1 a {
        	background-image: url('. get_stylesheet_directory_uri().'/assets/img/sf_logo.png) !important; 
        	width: 100% !important; 
        	margin: 0 auto !important; 
        	height: 81px !important; 
        	background-size: 170px !important; 
        	position: relative; 
        	top: -55px; 
        }
		.login h1 a:focus { 
			outline: 0 !important; 
			box-shadow: none; 
		}
  		.login form { 
  			background: rgba(255,255,255, 0.2) !important; 
  			margin-top: 0 !important; box-shadow: none !important; 
  			-webkit-border-radius: 0 0 14px 14px !important; 
  			border-radius: 0 0 14px 14px !important; 
  			padding: 20px 24px 24px !important; 
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
		    background: transparent !important;
		    padding: 12px 10px 15px 10px !important;
		    color: #A0A0A0!important;
		    -webkit-border-radius: 6px 6px 6px 6px !important;
		    border-radius: 6px 6px 6px 6px !important;
		    font-size: 20px!important;
		    border: 1px solid rgb(255, 255, 255, 0.5) !important;
		}
		.login .forgetmenot #rememberme {
		    width: 22px !important;
		    height: 22px !important;
		    padding: 3px 2px 2px 2px!important;
		}
		.login #wp-submit {
		    border: none !important;
		    box-shadow: none !important;
		    clear: both !important;
		    width: 100% !important;
		    color: #fff !important;
		    text-shadow: none !important;
		    padding: 15px 0 !important;
		    display: block !important;
		    height: auto !important;
		    font-size: 16px !important;
		    font-weight: 700 !important;
		    text-transform: uppercase !important;
		    background-color: #86C232 !important;
		    margin: 18px auto 0 auto !important;
		    border-radius: 6px 6px 6px 6px !important;
		    -webkit-border-radius: 6px 6px 6px 6px !important;
		}
		.login label {
			color: #DDD !important;
		}
		.login a {
			color: #01B0E5 !important;
		}
		.login a:hover {
			color: #FFFFFF !important;
		}
		.login #nav, .login #backtoblog {
		    text-align: center !important;
		}
		.login #nav, .login #backtoblog {
		    margin: 10px 0 0;
		}
		.login #nav a:hover, .login #nav a:focus, .login #backtoblog a:hover, .login #backtoblog a:focus {
		    outline: 0 !important;
		    box-shadow: none !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin: 0;
			padding: 12px 15px !important;
			background: rgba(255,255,255, 0.2) !important;
		}
		.login a{color:#ffffff !important;}
		.login #login_error, .login .message, .login .success{border-left:4px solid#86C232 !important}
    </style>';
}
add_action('login_head', 'shhcl_custom_login_page');
/** Remove Login Wiggle */
function remove_login_shake() {
	// remove the wp_shake JavaScript
	remove_action( 'login_head', 'wp_shake_js', 12 );
}
add_action( 'login_head', 'remove_login_shake' );
function shhcl_login_logo_url_title() {
 	return 'Stilling & Harrison Health Care Law';
}
add_filter( 'login_headertitle', 'shhcl_login_logo_url_title' );
function shhcl_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'shhcl_login_logo_url' );
