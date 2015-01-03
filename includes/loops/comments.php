<?php
// Do not delete this section
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
  die ('Please do not load this page directly. Thanks!'); }
if ( post_password_required() ) { ?>
  <div class="alert alert-warning">
    <?php _e('This post is password protected. Enter the password to view comments.', 'fst'); ?>
  </div>
<?php
  return; 
}
// End do not delete section
 
if (have_comments()) : ?>

<h3><?php _e('Feedback', 'fst'); ?></h3>
<p class="text-muted" style="margin-bottom: 2rem">
 <big><i class="fi-comment-quotes"></i></big>&nbsp; <?php _e('Comments', 'fst');  ?>: <?php comments_number(__('None', 'fst'), '1', '%'); ?>
</p>
  
<ol class="commentlist">
  <?php wp_list_comments('type=comment&callback=fst_comment');?>
</ol>

<ul class="pagination">
  <li class="older"><?php previous_comments_link() ?></li>
  <li class="newer"><?php next_comments_link() ?></li>
</ul>

<?php
  else :
	  if (comments_open()) :
  		echo "<div class='alert-box info'>" . __('Be the first to write a comment.', 'fst') . "</div>";
		else :
			echo "<div class='alert-box warning'>" . __('Comments are closed for this post.', 'fst') . "</div>";
		endif;
	endif;
?>

<?php if (comments_open()) : ?>
<section id="respond">
  <h3><?php comment_form_title(__('Your feedback', 'fst'), __('Responses to %s', 'fst')); ?></h3>
  <p><?php cancel_comment_reply_link(); ?></p>
  <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
  <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'fst'), wp_login_url(get_permalink())); ?></p>
  <?php else : ?>
  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if (is_user_logged_in()) : ?>
    <p>
      <?php printf(__('Logged in as', 'fst') . ' <a href="%s/wp-admin/profile.php">%s</a>.', get_option('siteurl'), $user_identity); ?>
      <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'fst'); ?>"><?php echo __('Log out', 'fst') . ' <i class="fi-arrow-right"></i>'; ?></a>
    </p>
    <?php else : ?>
      <label for="author"><?php _e('Your name', 'fst'); if ($req) echo ' <span>' . __('(required)', 'fst') . '</span>'; ?></label>
      <input type="text" class="form-control" name="author" id="author" placeholder="<?php _e('Your name', 'fst'); ?>" value="<?php echo esc_attr($comment_author); ?>" <?php if ($req) echo 'aria-required="true"'; ?>>
      <label for="email"><?php _e('Your email address', 'fst'); if ($req) echo ' <span>' . _e('(required, but will not be published)', 'fst') . '</span>'; ?></label>
      <input type="email" class="form-control" name="email" id="email" placeholder="<?php _e('Your email address', 'fst'); ?>" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo 'aria-required="true"'; ?>>
      <label for="url"><?php echo __('Your website', 'fst') . ' <span class="text-muted">' . __('if you have one (not required)', 'fst') . '</span>'; ?></label>
      <input type="url" class="form-control" name="url" id="url" placeholder="<?php _e('Your website url', 'fst'); ?>" value="<?php echo esc_attr($comment_author_url); ?>">
    <?php endif; ?>
      <label for="comment"><?php _e('Your comment', 'fst'); ?></label>
      <textarea name="comment" class="form-control" id="comment" placeholder="<?php _e('Your comment', 'fst'); ?>" rows="8" aria-required="true"></textarea>
    <p><input name="submit" class="button small" type="submit" id="submit" value="<?php _e('Submit comment', 'fst'); ?>"></p>
    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
  </form>
  <?php endif; ?>
</section>
<?php endif; ?>
