<?php

function fst_enqueues() {

  // Register and enqueue stylesheets

  wp_register_style('normalize-css', get_template_directory_uri() . '/css/normalize.css', false, '3.0.2', null);
	wp_enqueue_style('normalize-css');

  wp_register_style('foundation-css', get_template_directory_uri() . '/css/foundation.min.css', false, '5.5.1', null);
	wp_enqueue_style('foundation-css');

  wp_register_style('foundation-icons-css', get_template_directory_uri() . '/fonts/foundation-icons.css', false, '3.0', null);
	wp_enqueue_style('foundation-icons-css');

  wp_register_style('fst-css', get_template_directory_uri() . '/css/fst.css', false, null);
	wp_enqueue_style('fst-css');

  // Register and enqueue JavaScripts

	wp_register_script('jquery', get_bloginfo('template_url').'/js/vendor/jquery.js', false, '2.1.3', true);
	wp_enqueue_script( 'jquery' );

  wp_register_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', false, null, true);
	wp_enqueue_script('modernizr');

  wp_register_script('foundation-js', get_template_directory_uri() . '/js/foundation.min.js', false, null, true);
	wp_enqueue_script('foundation-js');

	wp_register_script('fst-js', get_template_directory_uri() . '/js/fst.js', false, null, true);
	wp_enqueue_script('fst-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'fst_enqueues', 100);

?>

