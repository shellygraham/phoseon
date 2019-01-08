<?php
/**
 * The default template for displaying content
 *
 * Used for both In The News and Press Releases.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="grid-x grid-margin-x">
			<div class="cell small-7">
				<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					}
				?>
				<h2><?php the_field('subtitle'); ?></h2>
				<?php the_field('intro_text'); ?>
				<?php foundationpress_entry_meta(); ?>
			</div>
			<div class="cell small-4 small-offset-1">
			<?php get_template_part( 'template-parts/featured-image-blog-single' ); ?>
			</div>
		</div>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
<!--
		Tags: <?php the_terms( $post->ID, 'cpt_tags', '', ' | ' ); ?><br />
		Categories: <?php the_terms( $post->ID, 'cpt_category', '', ' | ' ); ?>
-->
	</div>
	<?php comments_template(); ?>
</article>

<?php get_footer();