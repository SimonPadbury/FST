<?php get_template_part('includes/header'); ?>

<section class="main-section">
  <div class="row">
    
    <div class="medium-8 columns" id="content" role="main">
      <h2><?php _e('Search Results for', 'bst'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
      <hr/>
      <?php get_template_part('includes/loops/content', 'search'); ?>
    </div><!-- /#content -->
    
    <aside class="medium-4 columns" id="sidebar" role="navigation">
       <?php get_template_part('includes/sidebar'); ?>
    </aside>
    
  </div>
</section><!-- /.main-section -->

<<<<<<< HEAD
<?php get_template_part('includes/footer'); ?>
=======
		<section class="medium-8 columns" id="content" role="main">
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

		<aside id="sidebar" class="medium-4 columns">
			<?php get_template_part('structure/sidebar'); ?>
		</aside>

	</div>
</div>

<?php get_template_part('structure/footer'); ?>
>>>>>>> FETCH_HEAD
