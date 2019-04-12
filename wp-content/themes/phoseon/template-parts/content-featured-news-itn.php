<?php
/**
 * The default template for displaying featured news content
 *
 * Used for index.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="grid-x grid-margin-x">
		<div class="cell small-12 featured-post">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
				<h2 class="entry-title"><?php echo the_field('featured_post_title-itn'); ?></h2>
				<span>Read more »</span>
			</a>
		</div>
	</div>
</article>
