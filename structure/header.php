<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">

			<nav class="tab-bar show-for-small-only">
				<section class="middle tab-bar-section">
					<h1 class="title"><?php bloginfo( 'name' ); ?></h1>
				</section>
				<section class="right-small">
					<a class="right-off-canvas-toggle menu-icon" ><span></span></a>
				</section>
			</nav>
			<aside class="right-off-canvas-menu">
				<?php get_template_part('structure/off-canvas-sidebar'); ?>
			</aside>

      <div class="show-for-medium-up">
        <nav class="top-bar" data-topbar>
          <ul class="title-area">
            <li class="name">
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>
          <section class="top-bar-section">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'top-bar-left',
                'container' => false,
                'depth' => 0,
                'items_wrap' => '<ul class="left">%3$s</ul>',
                'fallback_cb' => 'fst_menu_fallback', // Show fallback message if no menus
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
                'walker' => new fst_walker( array(
                  'in_top_bar' => true,
                  'item_type' => 'li',
                  'menu_type' => 'main-menu'
                ) ),
              ) );
            ?>
          </section>
        </nav>
      </div>

      <?php $header =  get_header_textcolor(); if ( $header !== "blank" ) : ?>
        <header class="site-header" <?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) : ?> style="background:url('<?php echo esc_url( $header_image ); ?>');" <?php endif; ?>>
          <div class="row">
            <div class="large-12 columns">
          <h1 class="site-title">
                  <a href="<?php echo home_url('/'); ?>" style="color:#<?php header_textcolor(); ?>;" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
              </h1>
          <h3 class="subheader site-description"><?php bloginfo( 'description' ); ?></h3>
            </div>
          </div>
        </header>
      <?php endif; ?>