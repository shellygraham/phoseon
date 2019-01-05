<?php
/**
 * The default template for displaying event content
 *
 * Used for index.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="grid-x grid-margin-x">
		<div class="cell small-4">
			<?php get_template_part( 'template-parts/featured-image' ); ?>
		</div>
		<div class="cell small-12">
			<?php
				if ( is_single() ) {
					the_title( '<h2 class="entry-title">', '</h2>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
			?>
<!-- 				<?php foundationpress_entry_meta(); ?> -->
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>
