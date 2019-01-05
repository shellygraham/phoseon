<?php
/**
 * The default template for displaying cpt content
 *
 * Used for index.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="grid-x grid-margin-x">
		<div class="cell small-8">
			<?php
				if ( is_single() ) {
					the_title( '<h2 class="entry-title">', '</h2>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
			?>
<!-- 				<?php foundationpress_entry_meta(); ?> -->
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div>
			<?php the_tags( '', ' | ', '' ); ?>
			<?php the_terms( $post->ID, 'cpt_tags', '', ' | ' ); ?>
		</div>
		<div class="cell small-4">
			<?php get_template_part( 'template-parts/featured-image' ); ?>
		</div>
	</div>
</article>
