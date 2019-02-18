<?php
/**
Template Name: IC In the News
 */

get_header(); ?>

<div class="grid-container pr-feed">
	<div class="grid-x grid-margin-x">
		<div class="cell small-3">
			<h1><?php the_title(); ?></h1>
			<?php echo do_shortcode('[ajax_load_more_filters id="ic_news" target="ic_news_posts"]'); ?>
			<button id="clear-filters" class="button">Clear Filters</button>
		</div>
		<div class="cell small-9">
			<?php echo do_shortcode('[ajax_load_more id="ic_news_posts" container_type="ul" target=ic_news" filters="true" post_type="in_the_news" taxonomy="itn_division:itn_division" taxonomy_terms="industrial-curing:life-sciences" taxonomy_operator="IN:NOT IN" button_label="Articles"]'); ?>			
		</div>
	</div>
</div>

<?php get_footer();
