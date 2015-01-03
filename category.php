<?php get_template_part('includes/header'); ?>

<section class="main-section">
  <div class="row">
    
    <div class="medium-8 columns" id="content" role="main">
      <h1>Category: <?php echo single_cat_title(); ?></h1>
      <hr>
      <?php get_template_part('includes/loops/content', get_post_format()); ?>
    </div><!-- /#content -->
    
    <aside class="medium-4 columns" id="sidebar" role="navigation">
       <?php get_template_part('includes/sidebar'); ?>
    </aside>
    
  </div>
</section><!-- /.main-section -->

<?php get_template_part('includes/footer'); ?>