<?php

function fst_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url('/') . '" >
			<div class="row collapse widget-search">
				<div class="small-10 columns">
					<input class="form-control" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr__('Search', 'fst') . '..." name="s" id="s" />
				</div>
				<div class="small-2 columns">
					<button class="button expand"  type="submit" id="searchsubmit" value="'. esc_attr__('Search', 'fst') .'"><i class="fi-magnifying-glass"></i></button>
				</div>
			</div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'fst_search_form' );

?>