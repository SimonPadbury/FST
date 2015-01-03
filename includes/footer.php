<section class="site-footer-nav">
	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>
</section>
<footer class="site-footer-info">
  <div class="row">
    <div class="medium-12 columns">
      <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
  </div>
</footer>

<a class="exit-off-canvas"></a>
</div><!-- /.inner-wrap -->
</div><!-- /.off-canvas-wrap -->

<?php wp_footer(); ?>
</body>
</html>
