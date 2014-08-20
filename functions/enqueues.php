<?php

if( ! function_exists( 'fst_scripts_and_styles ' ) ) {
	function fst_scripts_and_styles() {
	  if ( !is_admin() ) {

      //Register and enqueue scripts
      // NOTE: Using the WP onboard jQuery
      // See: http://matthewruddy.com/using-jquery-with-wordpress/
      
      wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.6.2', false );
      wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '5.3.3', true );
      wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '1.0', true );
      
      
      wp_enqueue_script( 'modernizr' );
      wp_enqueue_script( 'jquery' );
      wp_enqueue_script( 'foundation' );
      wp_enqueue_script( 'app' );
      
      // Register and enqueue stylesheets
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
}
add_action( 'wp_enqueue_scripts', 'fst_scripts_and_styles' );

?>