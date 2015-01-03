<?php get_template_part('includes/header'); ?>

<section class="main-section">
  <div class="row">
    
    <div class="medium-8 columns" id="content" role="main">
      <h2><?php _e('Search Results for', 'bst'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
      <hr/>
      <?php get_template_part('includes/loops/content', 'search'); ?>
    </div><!-- /#content -->
    
    <aside class="medium-4 columns" id="sidebar" role="navigation">
       <?php get_template_part('includes/sidebar'); ?>
    </aside>
    
  </div>
</section><!-- /.main-section -->

<?php get_template_part('includes/footer'); ?>
