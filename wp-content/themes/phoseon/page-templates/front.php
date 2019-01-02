<?php
/*
Template Name: Front
*/
get_header(); ?>

<section class="landing-page">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
