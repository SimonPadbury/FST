<?php 

/*
Top Bar and Off-Canvas Sidebar menus
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

/*
Menus fallback (top-bar and off-canvas)
*/
function fst_link_to_menu_editor( $args ) {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	extract( $args );
  
	$link = $link_before . '<a href="' .admin_url( 'nav-menus.php' ) . '">' . $before . 'Add a menu' . $after . '</a>' . $link_after;
  
	if ( FALSE !== stripos( $items_wrap, '<ul' ) or FALSE !== stripos( $items_wrap, '<ol' ) ) {
		$link = "<li>$link</li>";
	}
  
	$output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
    
	if ( ! empty ( $container ) ) {
		$output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
	}
  
	if ( $echo ) {
  		echo $output;
	}
  
	return $output;
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
