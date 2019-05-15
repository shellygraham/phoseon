<?php
/*
Template Name: Products All
*/

get_header(); ?>

<div class="product-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<h2 style="float: left;">Select your product requirements below:</h2><button id="clear-filters" class="button" style="float: right;">Clear Filters</button>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 all-products-filters">
				<?php echo do_shortcode('[ajax_load_more_filters id="product_filters" target="my_alm_filters" container_type="div"]'); ?>
			</div>
			<div class="cell small-12">
				<?php echo do_shortcode('[ajax_load_more id="my_alm_filters" transition_container_classes="grid-x grid-margin-x" filters="true" target="product_filters" post_type="products" repeater="template_3" order="ASC" orderby="title" posts_per_page="12" button_label="More Products"]'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
