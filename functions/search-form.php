<?php

function fst_search_form( $form ) {
    $form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
    <div class="row">
			<div class="large-12 columns">
				<div class="row collapse">
    			<div class="large-8 small-9 columns">
		    		<input type="text" value="' . get_search_query() . '" name="s" id="s" />
    			</div>
					<div class="large-4 small-3 columns">
						<button type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" class="button prefix">Search</button>
    		</div>
    	</div>
    </div>
		
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'fst_search_form' );

?>

