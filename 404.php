<?php get_template_part('includes/header'); ?>

<section class="main-section">
  <div class="row">
    
    <div class="medium-8 columns" id="content" role="main">
      <div class="alert alert-warning">
        <h1><i class="glyphicon glyphicon-warning-sign"></i> <?php _e('Error', 'bst'); ?> 404</h1>
        <p><?php _e('The page you were looking for does not exist.', 'bst'); ?></p>
      </div>
    </div><!-- /#content -->
    
    <aside class="medium-4 columns" id="sidebar" role="navigation">
       <?php get_template_part('includes/sidebar'); ?>
    </aside>
    
  </div>
</section><!-- /.main-section -->

<?php get_template_part('includes/footer'); ?>
