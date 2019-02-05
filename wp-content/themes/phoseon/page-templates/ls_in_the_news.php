<?php
/**
Template Name: LS In the News
 */

get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="cell small-3">
			<h1><?php the_title(); ?></h1>
			<?php echo do_shortcode('[ajax_load_more_filters id="ls_itn" target="ls_news_posts"]'); ?>
			<button id="clear-filters" class="button">Clear Filters</button>
		</div>
		<div class="cell small-9">
			<?php echo do_shortcode('[ajax_load_more id="ls_news_posts" container_type="ul" target=ls_itn" filters="true" post_type="in_the_news" taxonomy="posts_category:posts_category" taxonomy_terms="industrial-curing:life-sciences" taxonomy_operator="NOT IN:IN" button_label="More Articles"]'); ?>			
		</div>
	</div>
</div>

<?php get_footer();
