<?php

// Register Top-Bar and Off-Canvas Sidebar menus

register_nav_menus(
	array(
		'top-bar-left' 		=> __('Top-bar Left', 'fst'),
		'top-bar-right' 	=> __('Top-bar Right', 'fst'),
		'off-canvas-menu' => __('Off-canvas Menu', 'fst'),
	)
);

// Foundation Top-Bar extension for WordPress Walker Nav-Menu

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

// Add Foundation 'active' class for the top-bar current menu item

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
