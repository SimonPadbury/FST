<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<section class="entry-content">
		<?php the_content(); ?>
	</section>

	<footer>
		<?php wp_link_pages(
			array(
				'before' => '<nav id="page-nav"><p>' . __('Pages:', 'fst'),
				'after' => '</p></nav>' 
			));
		?>
	</footer>

</article>
