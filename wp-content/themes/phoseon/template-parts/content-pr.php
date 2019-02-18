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
				<h1><?php the_title(); ?></h1>
				<?php if( get_field('subtitle') ): ?>
					<h2><?php the_field('subtitle'); ?></h2>
				<?php endif; ?>
				
				<?php if( get_field('intro_text') ): ?>
					<?php the_field('intro_text'); ?>
				<?php endif; ?>
				
			</div>
			<div class="cell small-4 small-offset-1">
			<?php the_post_thumbnail( 'medium' ); ?>
			</div>
		</div>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
		Tags: <?php the_terms( $post->ID, 'pr_tags', '', ' | ' ); ?><br />
		Categories: <?php the_terms( $post->ID, 'posts_category', '', ' | ' ); ?>
	</div>
	<?php comments_template(); ?>
</article>
