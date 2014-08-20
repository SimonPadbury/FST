<?php get_template_part('structure/header'); ?>

<div class="container" role="document">
	<div class="row">

		<section class="large-8 columns" id="content" role="main">

			<?php get_template_part('structure/content/content', 'none');?>

		</section>

		<aside id="sidebar" class="large-4 columns">
			<?php get_template_part('structure/sidebar'); ?>
		</aside>

	</div>
</div>

<?php get_template_part('structure/footer'); ?>