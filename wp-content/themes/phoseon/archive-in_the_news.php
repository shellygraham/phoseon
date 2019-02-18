<?php
/**
 * The Press Release index/archive
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

<div class="grid-container pr-feed">
	<div class="grid-x grid-margin-x">
		<div class="cell small-3">
			<h1><?php echo post_type_archive_title( '', false ); ?></h1>
			<?php echo do_shortcode('[ajax_load_more_filters id="all_itn" target="all_itn_posts"]'); ?>
			<button id="clear-filters" class="button">Clear Filters</button>
		</div>
		<div class="cell small-9">
			<?php echo do_shortcode('[ajax_load_more id="all_itn_posts" container_type="ul" target="all_itn" filters="true" post_type="in_the_news" button_label="More Articles"]'); ?>
		</div>
	</div>
</div>

<?php get_footer();
