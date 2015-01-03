<?php
/*
Top-bar search form
==================
If you don't want a search form in your navbar, then delete the link to this PHP page from within the navbar in header.php. Then you can insert the Search Widget into the sidebar.
*/
?>
<ul class="right">
    <li class="has-form">
        <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="row collapse">
                <div class="small-9 columns">
                    <input class="form-control" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
                </div>
                <div class="small-3 columns">
                    <button class="button expand" type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'fst') ?>"><i class="fi-magnifying-glass"></i></button>
                </div>
            </div>
        </form>
    </li>
</ul>