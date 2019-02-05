<?php
/**
Template Name: IC Press Releases
 */

get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="cell small-3">
			<h1><?php the_title(); ?></h1>
			<?php echo do_shortcode('[ajax_load_more_filters id="ic_pr" target="ic_pr_posts"]'); ?>
			<button id="clear-filters" class="button">Clear Filters</button>
		</div>
		<div class="cell small-9">
			<?php echo do_shortcode('[ajax_load_more id="ic_pr_posts" container_type="ul" target=ic_pr" filters="true" post_type="press_releases" taxonomy="posts_category:posts_category" taxonomy_terms="industrial-curing:life-sciences" taxonomy_operator="IN:NOT IN" button_label="More Press Releases"]'); ?>			
		</div>
	</div>
</div>

<?php get_footer();
