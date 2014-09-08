<?php get_template_part('structure/header'); ?>

<div class="container" role="document">
	<div class="row">

		<section class="large-8 columns" id="content" role="main">
			<?php while (have_posts()) : the_post(); // Start loop ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		      <?php	edit_post_link( __( '<span class="button success">Edit this page</span>', 'fst' ), '<span class="edit-link">', '</span>' ); ?>
					<?php get_template_part( 'structure/content/content', 'page' ); ?>
				</article>
			<?php endwhile; // End loop ?>
		</section>

		<aside id="sidebar" class="large-4 columns">
			<?php get_template_part('structure/sidebar'); ?>
		</aside>

	</div>
</div>

<?php get_template_part('structure/footer'); ?>
