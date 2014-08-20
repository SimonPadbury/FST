<?php get_template_part('structure/header'); ?>

<div class="container" role="document">
	<div class="row">

		<section class="large-8 columns" id="content" role="main">
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
				<h1><?php _e('Search Results for', 'fst'); ?> "<?php echo get_search_query(); ?>"</h1>
	
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'structure/content/content', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'structure/content/content', 'none' ); ?>
				<?php endif;?>

				<?php if ( function_exists('fst_pagination') ) { fst_pagination(); } else if ( is_paged() ) { ?>
					<nav id="post-nav">
						<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'fst' ) ); ?></div>
						<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'fst' ) ); ?></div>
					</nav>
				<?php } ?>

			</article>
		</section>

		<aside id="sidebar" class="large-4 columns">
			<?php get_template_part('structure/sidebar'); ?>
		</aside>

	</div>
</div>

<?php get_template_part('structure/footer'); ?>