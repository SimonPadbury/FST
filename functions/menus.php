<?php 

	/*
	Top Bar and Off-Canvas Sidebar
	*/

  register_nav_menus(
    array(
      'top-bar-left' => __('Top-bar Left', 'fst'),
      'top-bar-right' => __('Top-bar Right', 'fst'),
      'off-canvas-primary' => __('Off-canvas Primary', 'fst'),
      'off-canvas-secondary' => __('Off-canvas Secondary', 'fst'),
    )
  );

	class fst_walker extends Walker_Nav_Menu {
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
      $element->has_children = !empty( $children_elements[$element->ID] );
      $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
      $element->classes[] = ( $element->has_children && $max_depth !== 1 ) ? 'has-dropdown' : '';
      
      parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
    
    function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
      $item_html = '';
      parent::start_el( $item_html, $object, $depth, $args ); 
      
      $output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';
      
      $classes = empty( $object->classes ) ? array() : (array) $object->classes;  
      
      if( in_array('label', $classes) ) {
        $output .= '<li class="divider"></li>';
        $item_html = preg_replace( '/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html );
      }
      
      if ( in_array('divider', $classes) ) {
        $item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
    }
      
      $output .= $item_html;
    }
    
    function start_lvl( &$output, $depth = 0, $args = array() ) {
      $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }
  }

  // Empty top-bar fallback
  if( ! function_exists( 'fst_menu_fallback' ) ) {
    function fst_menu_fallback() {
      echo '<div class="alert-box secondary">';
      // Translators 1: Link to Menus, 2: Link to Customize
      printf( __( 'Please assign two menus (%1$s or %2$s). Only with two menus assigned will the menu appear correctly. But if you need only one menu, then comment out one of the menus in "structures/header.php".', 'fst' ),
      	sprintf(  __( '<a href="%s">Menus</a>', 'fst' ),
        	get_admin_url( get_current_blog_id(), 'nav-menus.php' )
        ),
        sprintf(  __( '<a href="%s">Customize</a>', 'fst' ),
        	get_admin_url( get_current_blog_id(), 'nav-menus.php' )
        )
      );
      echo '</div>';
    }
  }

  // Add Foundation 'active' class for the top-bar current menu item (blue background item)
  if( ! function_exists( 'fst_active_nav_class' ) ) {
    function fst_active_nav_class( $classes, $item ) {
      if ( $item->current == 1 || $item->current_item_ancestor == true ) {
        $classes[] = 'active';
      }
      return $classes;
    }
  }
	add_filter( 'nav_menu_css_class', 'fst_active_nav_class', 10, 2 );

?>
