
<?php
    wp_nav_menu( array(
        'theme_location' => 'top-bar-left',
        'container' => false,
        'depth' => 0,
        'items_wrap' => '<ul class="left">%3$s</ul>',
        'fallback_cb' => 'fst_link_to_menu_editor',
        'walker' => new fst_walker( array(
            'in_top_bar' => true,
            'item_type' => 'li',
            'menu_type' => 'main-menu'
        ) ),
    ) );
?>
<?php
    wp_nav_menu( array(
        'theme_location' => 'top-bar-right',
        'container' => false,
        'depth' => 0,
        'items_wrap' => '<ul class="right">%3$s</ul>',
        'fallback_cb' => 'fst_link_to_menu_editor',
        'walker' => new fst_walker( array(
            'in_top_bar' => true,
            'item_type' => 'li',
            'menu_type' => 'main-menu'
        ) ),
    ) );
?>
