
<?php

if ( has_nav_menu( 'top-bar-left' ) ) {
    wp_nav_menu( array(
        'theme_location' => 'top-bar-left',
        'container' => false,
        'depth' => 0,
        'items_wrap' => '<ul class="left">%3$s</ul>',
        'walker' => new fst_walker( array(
            'in_top_bar' => true,
            'item_type' => 'li',
            'menu_type' => 'main-menu'
        ) ),
    ) );
} else {
	echo $link = $link_before . '<ul class="left"><li><a href="' . admin_url( 'nav-menus.php' ) . '">' . $before . 'Add a menu here' . $after . '</a></li></ul>' . $link_after;
}

if ( has_nav_menu( 'top-bar-right' ) ) {
    wp_nav_menu( array(
        'theme_location' => 'top-bar-right',
        'container' => false,
        'depth' => 0,
        'items_wrap' => '<ul class="right">%3$s</ul>',
        'walker' => new fst_walker( array(
            'in_top_bar' => true,
            'item_type' => 'li',
            'menu_type' => 'main-menu'
        ) ),
    ) );
} else {
	echo $link = $link_before . '<ul class="right"><li><a href="' . admin_url( 'nav-menus.php' ) . '">' . $before . 'Add a menu here' . $after . '</a></li></ul>' . $link_after;
}?>
