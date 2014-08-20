<?php
/*
Default content template (used by index.php, article.php and single.php)
If you require only post excerpts to be shown in index and archive pages, then 
use the [more] line within blog posts.

If you require different templates for different post types simply duplicate 
this template, save the copy as "content-aside.php" etc., and modify it the way 
you like it.

Alternatively, notice that the post_class() function inserts different classes 
for different post types into the aricle tag (e.g. <article id="" class="format-aside">).
You can use this to style this "content.php" in different ways.
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<?php if (is_single()) { ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php get_template_part('structure/content/entry-meta') ?>
		<?php } else { ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part('structure/content/entry-meta') ?>
		<?php } ?>
	</header>

	<div class="entry-content">
		<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" class="th" title="<?php the_title_attribute(); ?>" >
				<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>
		<?php the_content(__('<p><span class="button">Continue reading ...</span></p>', 'fst')); ?>
	</div>

</article>

<hr>