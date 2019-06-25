<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="grid-container blog">
	<div class="grid-x grid-margin-x">
		<div class="cell medium-3">
			<?php the_field('blog_intro', 'options'); ?>
			<?php echo do_shortcode('[ajax_load_more_filters id="blog_filter" target="blog_all"]'); ?>

		</div>
		<div class="cell medium-9">
			<?php echo do_shortcode('[ajax_load_more id="blog_all" target="blog_filter" filters="true" filters_debug="true" repeater="template_1" post_type="post, press_releases, in_the_news" taxonomy="posts_year, posts_category" taxonomy_operator="IN" button_label="Load More" transition="masonry" masonry_selector=".grid-item" masonry_animation="slide-up" masonry_horizontalorder="false"]'); ?>
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
