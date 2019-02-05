<?php
/**
 * The template for displaying events singles
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="product-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">
				<h1><?php the_title(); ?></h1>
				<p><?php the_field('start_date'); ?> - <?php the_field('end_date'); ?></p>
				<p><?php the_field('event_location'); ?></p>
				<p><a href="<?php the_field('event_website'); ?>" target="_blank">Show website »</a></p>
			</div>
		</div>
	</div>
</div>
<?php get_footer();