<?php dynamic_sidebar("sidebar-widgets"); ?>

<?php if ( ! dynamic_sidebar("sidebar-widgets") ) : ?>
	<?php echo $link = $link_before . '<div class="alert-box secondary"><a href="' .admin_url( 'widgets.php' ) . '">' . $before . 'Add some widgets' . $after . '</a></div>' . $link_after; ?>
<?php endif; ?>
