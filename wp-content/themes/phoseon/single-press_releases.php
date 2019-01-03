<?php
/**
 * The template for displaying single cpt and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="cell small-12">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content-cpt', '' ); ?>
			<?php the_post_navigation(); ?>
			<?php comments_template(); ?>
		<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer();
