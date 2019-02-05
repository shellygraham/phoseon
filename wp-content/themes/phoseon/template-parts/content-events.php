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
		<div class="cell small-12">
			<h1><?php the_title(); ?></h1>
			<p><?php the_field('start_date'); ?> - <?php the_field('end_date'); ?></p>
			<p><?php the_field('event_location'); ?></p>
			<p><a href="<?php the_field('event_website'); ?>" target="_blank">Show website »</a></p>
		</div>
	</div>
</article>
