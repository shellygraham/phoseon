<?php
/**
 * The default template for displaying news content
 *
 * Used for index.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" class="feed-articles">
	<div class="grid-x grid-margin-x">
		<div class="cell small-12 news-post">
			<?php
				if ( is_single() ) {
					the_title( '<h2 class="entry-title">', '</h2>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
			?>
		</div>
	</div>
</article>
