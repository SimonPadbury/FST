<?php get_template_part('includes/header'); ?>

<section class="main-section">
  <div class="row">
    
    <div class="medium-8 columns" id="content" role="main">
      <?php get_template_part('includes/loops/content', 'page'); ?>
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
			<?php while (have_posts()) : the_post(); // Start loop ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<?php get_template_part( 'structure/content/content', 'page' ); ?>
				</article>
			<?php endwhile; // End loop ?>
		</section>

		<aside id="sidebar" class="medium-4 columns">
			<?php get_template_part('structure/sidebar'); ?>
		</aside>

	</div>
</div>

<?php get_template_part('structure/footer'); ?>
>>>>>>> FETCH_HEAD
