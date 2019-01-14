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
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">
				<?php echo do_shortcode('[ajax_load_more_filters id="product_filters" target="my_alm_filters"]'); ?>
			</div>
			<div class="cell small-12">
				<?php echo do_shortcode('[ajax_load_more id="my_alm_filters" filters="true" target="product_filters" post_type="products" posts_per_page="10"]'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
