<?php

if( ! function_exists( 'fst_scripts_and_styles ' ) ) {
	function fst_scripts_and_styles() {
		
		/*
		OPTIONAL: Google CDN jQuery with a local fallback
		See http://www.wpcoke.com/load-jquery-from-cdn-with-local-fallback-for-wordpress/
		If you want to use this, simply delete (or comment-out the block of code below (lines 8-26) 
		*/
		if ( !is_admin() ) {
			// $url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'; 
			$url = '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'; 
			$test_url = @fopen($url,'r'); 
			if($test_url !== false) { 
				function load_external_jQuery() {
					wp_deregister_script('jquery'); 
					// wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); 
					wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); 
					wp_enqueue_script('jquery'); 
				}
				add_action('wp_enqueue_scripts', 'load_external_jQuery'); 
			} else {
				function load_local_jQuery() {
					wp_deregister_script('jquery'); 
					wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.1.min.js', __FILE__, false, '1.11.1', true); 
					wp_enqueue_script('jquery'); 
				}
				add_action('wp_enqueue_scripts', 'load_local_jQuery'); 
			}
		}
		/*
		OPTIONAL:
		If you have problems with using the Google CDN hosted jQuery:
		-- Comment-out line 11 and un-comment line 10 
		-- Comment-out line 17 and un-comment line 16 
		*/

		//Register and enqueue scripts
		// NOTE: Using the WP onboard jQuery
		// See: http://matthewruddy.com/using-jquery-with-wordpress/
		
		wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.6.2', false );
		wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '5.3.3', true );
		wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '1.0', true );
      
		wp_enqueue_script( 'modernizr' );
		/*
		OPTIONAL: Enqueue WordPress's onboard jQuery
		If you don't want to rely on Google CDN hosted jQuery, then you can register and enqueue 
		WordPress's onboard jQuery by un-commenting the two lines below.
		*/
		//	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.1.min.js', __FILE__, false, '1.11.1', true);
		//	wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'foundation' );
		wp_enqueue_script( 'app' );
	      
		// Register and enqueue stylesheets
		// NOTE: Do not register or enqueue 'foundation-stylesheet' if you are compiling app.css from the SCSS files,
		// because app.scss contains @import "foundation"
		
		wp_register_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '', 'all' );
		wp_register_style( 'foundation-stylesheet', get_stylesheet_directory_uri() . '/css/foundation.min.css', array(), '' );
		wp_register_style( 'app', get_stylesheet_directory_uri() . '/css/app.css', array(), '', 'all' );
		
		wp_enqueue_style( 'normalize' );
		wp_enqueue_style( 'foundation-stylesheet' );
		wp_enqueue_style( 'app' );
		
		// comment reply script for threaded comments
		if( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
	}
}
add_action( 'wp_enqueue_scripts', 'fst_scripts_and_styles' );

?>
