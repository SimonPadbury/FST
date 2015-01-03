<<<<<<< HEAD
<?php get_template_part('includes/header'); ?>

<section class="main-section">
  <div class="row">
    
    <div class="medium-8 columns" id="content" role="main">
      <?php get_template_part('includes/loops/content', get_post_format()); ?>
    </div><!-- /#content -->
    
    <aside class="medium-4 columns" id="sidebar" role="navigation">
       <?php get_template_part('includes/sidebar'); ?>
    </aside>
    
  </div>
</section><!-- /.main-section -->

<?php get_template_part('includes/footer'); ?>
=======
<?php get_template_part('structure/header'); ?>

<div class="container" role="document">
	<div class="row">

		<section class="medium-8 columns" id="content" role="main">

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

		</section>

		<aside id="sidebar" class="medium-4 columns">
			<?php get_template_part('structure/sidebar'); ?>
		</aside>

	</div>
</div>

<?php get_template_part('structure/footer'); ?>
>>>>>>> FETCH_HEAD
