<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

	<?php get_template_part( 'structure/content/content', get_post_format() ); ?>

	<footer>
		<?php $tag = get_the_tags(); if (!$tag) { } else { ?>
			<p><?php the_tags(); ?></p>
		<?php } ?>
		<?php wp_link_pages(
			array(
				'before' => '<nav id="page-nav"><p>' . __('Pages:', 'fst'),
				'after' => '</p></nav>' 
			));
		?>
	</footer>

	<?php comments_template('/structure/content/comments.php'); ?>

</article>
