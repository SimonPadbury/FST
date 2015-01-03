<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 9]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    
    <nav class="tab-bar show-for-small-only">
      <section class="middle tab-bar-section">
        <h1 class="title"><?php bloginfo( 'name' ); ?></h1>
      </section>
      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>
    </nav>
    <aside class="right-off-canvas-menu">
      <?php get_template_part('includes/off-canvas-sidebar'); ?>
    </aside>
    
    <section class="show-for-medium-up">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
          <?php
            if ( has_nav_menu( 'top-bar-left' ) ) {
              wp_nav_menu( array(
                'theme_location' 	=> 'top-bar-left',
                'container' 			=> false,
                'depth' 					=> 0,
                'items_wrap' 			=> '<ul class="left">%3$s</ul>',
                'walker' 					=> new fst_walker( array(
									'in_top_bar' 			=> true,
									'item_type' 			=> 'li',
									'menu_type' 			=> 'main-menu'
                ) ),
              ) );
            } else {
              echo $link = '<ul class="left"><li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu here</a></li></ul>';
            }
					?>
          <?php get_template_part('includes/top-bar-search'); ?>
          <?php
            if ( has_nav_menu( 'top-bar-right' ) ) {
              wp_nav_menu( array(
                'theme_location' 	=> 'top-bar-right',
                'container' 			=> false,
                'depth' 					=> 0,
                'items_wrap' 			=> '<ul class="right">%3$s</ul>',
                'walker' 					=> new fst_walker( array(
									'in_top_bar' 			=> true,
									'item_type' 			=> 'li',
									'menu_type' 			=> 'main-menu'
                ) ),
              ) );
            } else {
              echo $link = '<ul class="right"><li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu here</a></li></ul>'; 
            }
					?>
        </section>
      </nav>
    </section>

    <section class="site-header">
      <div class="row">
        <div class="medium-12 columns">
          <h1 class="site-title">
            <a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
          </h1>
        </div>
      </div>
    </section>