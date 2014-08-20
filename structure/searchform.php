<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="row collapse">
		<div class="small-9 columns">
			<input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'fst'); ?>">
		</div>
		<div class="small-3 columns">
			<input type="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'fst'); ?>" class="button postfix">
		</div>
	</div>
</form>