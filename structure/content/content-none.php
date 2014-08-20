<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Ready to publish your first post?', 'fst' ); ?></h1>
			</header>
			<p><?php printf( __( '<a href="%1$s">Get started here</a>.', 'fst' ), admin_url( 'post-new.php' ) ); ?></p>

		<?php elseif ( is_search() ) : ?>
			<header class="page-header">
				<h2 class="page-title"><?php _e( 'Sorry, nothing found', 'fst' ); ?></h2>
			</header>
			<p><?php _e( 'We have nothing that matched your search terms.', 'fst' ); ?></p>
			<p><?php _e('Please try the following:', 'fst'); ?></p>
			<ul> 
				<li><?php _e('Check your spelling', 'fst'); ?></li>
				<li><?php _e('Try searching again with different search terms', 'fst'); ?></li>
				<li><?php printf(__('Return to the <a href="%s">home page</a>', 'fst'), home_url()); ?></li>
				<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'fst'); ?></li>
			</ul>
			<?php get_search_form(); ?>

		<?php else : ?>
			<header>
				<h1 class="entry-title"><?php _e('404 File not found', 'fst'); ?></h1>
			</header>
			<p><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'fst'); ?></p>
			<p><?php _e('Please try the following:', 'fst'); ?></p>
			<ul> 
				<li><?php printf(__('Return to the <a href="%s">home page</a>', 'fst'), home_url()); ?></li>
				<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'fst'); ?></li>
				<li><?php _e('Try a search', 'fst'); ?></li>
			</ul>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>

</article>