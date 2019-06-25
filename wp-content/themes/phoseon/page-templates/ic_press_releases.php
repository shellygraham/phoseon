<?php
/**
Template Name: IC Press Releases
 */

get_header(); ?>

<div class="grid-container pr-feed">
	<div class="grid-x grid-margin-x">
		<div class="cell medium-3">
			<h1><?php the_title(); ?></h1>
			<?php echo do_shortcode('[ajax_load_more_filters id="ic_pr" target="ic_pr_posts"]'); ?>
			<button id="clear-filters" class="button">Clear Filters</button>
		</div>
		<div class="cell medium-8 medium-offset-1">
			<?php echo do_shortcode('[ajax_load_more id="ic_pr_posts" container_type="ul" target=ic_pr" filters="true" post_type="press_releases" taxonomy="pr_division:pr_division" taxonomy_terms="life-sciences:industrial-curing" taxonomy_operator="NOT IN:IN" button_label="More Press Releases"]'); ?>			
		</div>
	</div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
	// Filtering Clear/reset button
	var clearBtn = document.getElementById('clear-filters');
	clearBtn.addEventListener('click', function(e){
	   window.almFiltersClear();
	});
</script>
