<?php

  function fst_widgets() {
  
    register_sidebar(array(
      'id' => 'off-canvas-widgets',
      'name' => __('Off-canvas', 'fst'),
      'description' => __('Drag your widgets here.', 'fst'),
      'before_widget' => '<section id="%1$s" class="%2$s off-canvas-widget">',
      'after_widget' => '</section>',
      'before_title' => '<ul><li><label>',
      'after_title' => '</label></li></ul>'
    ));
  
    register_sidebar(array(
      'id' => 'sidebar-widgets',
      'name' => __('Sidebar', 'fst'),
      'description' => __('Drag your widgets here.', 'fst'),
      'before_widget' => '<section id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></section>',
      'before_title' => '<h4>',
      'after_title' => '</h4>'
    ));
  
    register_sidebar(array(
      'id' => 'footer-widgets',
      'name' => __('Footer', 'fst'),
      'description' => __('Drag your widgets here', 'fst'),
      'before_widget' => '<section id="%1$s" class="large-4 columns widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h4>',
      'after_title' => '</h4>'      
    ));
  
  }
  add_action( 'widgets_init', 'fst_widgets' );

?>