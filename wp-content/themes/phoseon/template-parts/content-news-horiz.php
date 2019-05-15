<?php
/**
 * The default template for displaying news content in the news banner
 *
 * Used for index.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" class="feed-articles cell small-3 news-post">
	<?php
		if ( is_single() ) {
			the_title( '<h2 class="entry-title">', '</h2>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', ' &#187;</a></h2>' );
		}
	?>
<!-- 	<a href="<?php the_permalink(); ?>" rel="bookmark" class="button">Read More</a> -->
</article>