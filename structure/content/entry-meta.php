<div class="entry-meta">
	<p>
		<?php
			if ( 'post' == get_post_type() )
				// fst_entry_meta();
			if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			if ( is_sticky() && is_home() && ! is_paged() ) {
				echo '<span class="featured-post">' . __( '<b>Featured post</b> | ', 'fst' ) . '</span>';
			}
			printf( '<span class="entry-date"><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span><br><span class="byline">Written by <span class="author"><a href="%4$s" rel="author">%5$s</a></span></span>',
				esc_url( get_permalink() ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
		?>
		<span class="comments-link"> |
			<?php comments_popup_link( 
				__( 'Leave a comment', 'fst' ), 
				__( '1 Comment', 'fst' ), 
				__( '% Comments', 'fst' ) 
			); ?>
		</span>
		<?php
			endif;
		?>
	</p>
</div><!-- .entry-meta -->