<?php
/**
Template Name: LS In the News
 */

get_header(); ?>

<div class="grid-container pr-feed">
	<div class="grid-x grid-margin-x">
		<div class="cell medium-3">
			<h1><?php the_title(); ?></h1>
			<?php echo do_shortcode('[ajax_load_more_filters id="ls_itn" target="ls_news_posts"]'); ?>
			<button id="clear-filters" class="button">Clear Filters</button>
		</div>
		<div class="cell medium-9">
			<?php echo do_shortcode('[ajax_load_more id="ls_news_posts" container_type="ul" target=ls_itn" filters="true" post_type="in_the_news" taxonomy="itn_division:itn_division" taxonomy_terms="industrial-curing:life-sciences" taxonomy_operator="NOT IN:IN" button_label="More Articles"]'); ?>			
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
