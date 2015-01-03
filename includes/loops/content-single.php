<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h2><?php the_title()?></h2>
            <h4>
                <em>
                    <span class="text-muted" class="author"><?php _e('By', 'bst'); echo " "; the_author() ?>,</span>
                    <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
                </em>
            </h4>
	          <p class="text-muted" style="margin-bottom: 2rem;">
                <big><i class="fi-folder"></i></big>&nbsp; <?php _e('Category', 'fst'); ?>: <?php the_category(', ') ?><br/>
                <big><i class="fi-comment-quotes"></i></big>&nbsp; <?php _e('Comments', 'fst'); ?>: <?php comments_popup_link(__('None', 'fst'), '1', '%'); ?>
            </p>
        </header>
        <section>
            <?php the_post_thumbnail(); ?>
            <?php the_content()?>
        </section>
    </article>
<?php comments_template('/includes/loops/comments.php'); ?>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
