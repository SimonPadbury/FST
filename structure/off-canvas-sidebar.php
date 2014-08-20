<ul class="off-canvas-list">
	<li><label>
    <?php
	    $menu_locations = (array) get_nav_menu_locations();
  	  $menu = get_term_by('id', (int) $menu_locations['off-canvas-primary'], 'nav_menu', ARRAY_A);
    	echo $menu['name']; 
		?>
	</label></li>
</ul>

<?php
	wp_nav_menu( array(
    'theme_location' => 'off-canvas-primary',
    'container' => false,
    'depth' => 0,
    'items_wrap' => '<ul class="off-canvas-list">%3$s</ul>',
    'walker' => new fst_walker( array(
      'in_top_bar' => false,
      'item_type' => 'li',
      'menu_type' => 'main-menu'
    ) ),
  ) );
?>

<ul class="off-canvas-list">
	<li><label>
    <?php
	    $menu_locations = (array) get_nav_menu_locations();
  	  $menu = get_term_by('id', (int) $menu_locations['off-canvas-secondary'], 'nav_menu', ARRAY_A);
    	echo $menu['name']; 
		?>
	</label></li>
</ul>

<?php
	wp_nav_menu( array(
    'theme_location' => 'off-canvas-secondary',
    'container' => false,
    'depth' => 0,
    'items_wrap' => '<ul class="off-canvas-list">%3$s</ul>',
    'walker' => new fst_walker( array(
      'in_top_bar' => false,
      'item_type' => 'li',
      'menu_type' => 'main-menu'
    ) ),
  ) );
?>

<?php
	dynamic_sidebar("off-canvas-widgets");
?>