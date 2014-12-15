<?php get_template_part('structure/header'); ?>

<div class="container" role="document">
	<div class="row">

		<section class="medium-8 columns" id="content" role="main">
				
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'structure/content/content', 'single' ); ?>
				<?php endwhile; ?>
			<?php endif; ?>
	
		</section>

		<aside id="sidebar" class="medium-4 columns">
			<?php get_template_part('structure/sidebar'); ?>
		</aside>

	</div>
</div>

<?php get_template_part('structure/footer'); ?>
