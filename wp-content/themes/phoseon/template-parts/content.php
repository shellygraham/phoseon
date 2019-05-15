<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="grid-x grid-margin-x">
		<div class="cell small-10 small-offset-1">
			<?php
				if ( is_single() ) {
					the_title( '<h2 class="entry-title">', '</h2>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
			?>
			<div class="entry-content">
					<?php foundationpress_entry_meta(); ?>
					<?php the_excerpt(); ?>
			</div>
			<?php
				$product_terms = wp_get_object_terms( $post->ID,  'posts_category' );
				if ( ! empty( $product_terms ) ) {
					if ( ! is_wp_error( $product_terms ) ) {
						echo 'Categories: ';
						foreach( $product_terms as $term ) {
							echo '<a href="' . get_term_link( $term->slug, 'posts_category' ) . '">' . esc_html( $term->name ) . '</a>'; 
						}
					}
				}
			?>
			<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
		</div>
	</div>
</article>
