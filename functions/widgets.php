<?php

function fst_widgets_init() {

  	/*
    Off-canvas Sidebar (one widget area)
    */
    register_sidebar(array(
      'name' 					=> __( 'Off-canvas', 'fst' ),
      'id' 						=> 'off-canvas-widget-area',
      'description' 	=> __('The off-canvas widget area', 'fst'),
      'before_widget' => '<section class="%1$s %2$s">',
      'after_widget' 	=> '</section>',
      'before_title' 	=> '<ul><li><label>',
      'after_title' 	=> '</label></li></ul>'
    ));

  	/*
    Sidebar (one widget area)
    */
    register_sidebar( array(
      'name' 					=> __( 'Sidebar', 'fst' ),
      'id' 						=> 'sidebar-widget-area',
      'description' 	=> __( 'The sidebar widget area', 'fst' ),
      'before_widget' => '<section class="%1$s %2$s">',
      'after_widget' 	=> '</section>',
      'before_title' 	=> '<h4>',
      'after_title' 	=> '</h4>',
    ) );

  	/*
    Footer (three widget areas)
    */
    register_sidebar( array(
      'name' 					=> __( 'Footer', 'fst' ),
      'id' 						=> 'footer-widget-area',
      'description' 	=> __( 'The footer widget area', 'fst' ),
      'before_widget' => '<div class="%1$s %2$s medium-4 columns">',
      'after_widget' 	=> '</div>',
      'before_title' 	=> '<h4>',
      'after_title' 	=> '</h4>',
    ) );

}
add_action( 'widgets_init', 'fst_widgets_init' );

?>
