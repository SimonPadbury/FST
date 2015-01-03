<ul class="off-canvas-list">
	<li><label>
		<?php
			if ( has_nav_menu( 'off-canvas-menu' ) ) {
				$menu_locations = (array) get_nav_menu_locations();
				$menu = get_term_by('id', (int) $menu_locations['off-canvas-menu'], 'nav_menu', ARRAY_A);
				echo $menu['name']; 
      }
		?>
	</label></li>
</ul>

<?php
	if ( has_nav_menu( 'off-canvas-menu' ) ) {
    wp_nav_menu( array(
      'theme_location' 	=> 'off-canvas-menu',
      'container' 			=> false,
      'depth' 					=> 0,
      'items_wrap' 			=> '<ul class="off-canvas-list">%3$s</ul>',
      'fallback_cb' 		=> 'fst_link_to_menu_editor',
      'walker' 					=> new fst_walker( array(
        'in_top_bar' 			=> false,
        'item_type' 			=> 'li',
        'menu_type' 			=> 'main-menu'
      ) ),
    ) );
  } else {
    echo $link = '<ul class="off-canvas-list"><li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu here</a></li></ul>';
  }
?>

<section class="off-canvas-widget">
	<?php dynamic_sidebar("off-canvas-widget-area"); ?>
</section>