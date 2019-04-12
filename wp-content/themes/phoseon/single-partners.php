<?php
/**
 * The template for displaying single partners
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="grid-container default">
	<div class="grid-x grid-margin-x">
		<div class="cell small-12">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<a href="<?php the_field('partner_link'); ?>" class="button">Visit Site</a>
		<?php endwhile; ?>
		</div>
	</div>
</div>

<?php
get_footer();