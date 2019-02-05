<?php
/*
Template Name: LS Events
*/
get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="cell small-3">
			<h1><?php the_title(); ?></h1>
			<?php echo do_shortcode('[ajax_load_more_filters id="ls_events" target="ls_events_posts"]'); ?>
			<button id="clear-filters" class="button">Clear Filters</button>
		</div>
		<div class="cell small-9">
			<?php echo do_shortcode('[ajax_load_more id="ls_events_posts" repeater="template_2" container_type="ul" target=ls_events" filters="true" post_type="events" taxonomy="events_market:events_market" taxonomy_terms="industrial-curing:life-sciences" taxonomy_operator="IN NOT:IN" button_label="More Events"]'); ?>
		</div>
	</div>
</div>

<?php get_footer();