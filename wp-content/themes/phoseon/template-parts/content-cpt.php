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
			<div class="cell small-8">
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
			<div class="cell small-4">
			<?php get_template_part( 'template-parts/featured-image' ); ?>
			</div>
		</div>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<?php comments_template(); ?>
	<footer>
		<?php the_tags( '', ' | ', '' ); ?>
	</footer>
</article>

<?php get_footer();