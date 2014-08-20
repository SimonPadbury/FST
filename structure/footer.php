    <footer class="full-width site-footer">
      <div class="row">
        <?php dynamic_sidebar("footer-widgets"); ?>
      </div>
    </footer>
    
    <div class="site-info">
      <div class="row">
        <div class="large-4 columns">
          Theme: FST by <a href="http://simonpadbury.com/" rel="designer">Simon Padbury</a>
        </div>
        <div class="large-4 columns">
          &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
        </div>
        <div class="large-4 columns">
          <a  class="right" href="<?php echo esc_url( __( 'http://wordpress.org/', 'fst' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'fst' ), 'WordPress' ); ?></a>
        </div>
      </div>
    </div>

		<a class="exit-off-canvas"></a>
	</div>
</div>

<?php wp_footer(); ?>
	
</body>
</html>