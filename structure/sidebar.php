<?php dynamic_sidebar("sidebar-widgets"); ?>

<?php if ( ! dynamic_sidebar("sidebar-widgets") ) : ?>

  <div id="search" class="widget-container widget_search">
    <?php get_search_form(); ?>
  </div>

	<div id="archives" class="widget-container">
    <h4 class="widget-title"><?php _e( 'Archives', 'fst' ); ?></h4>
    <ul>
      <?php wp_get_archives( 'type=monthly' ); ?>
    </ul>
	</div>

	<div id="meta" class="widget-container">
    <h4 class="widget-title"><?php _e( 'Meta', 'fst' ); ?></h4>
    <ul>
      <?php wp_register(); ?>
      <li><?php wp_loginout(); ?></li>
      <?php wp_meta(); ?>
    </ul>
	</div>

<?php endif; ?>
