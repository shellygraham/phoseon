<?php
/*
Template Name: Global News Template
*/
get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="cell small-6">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="cell small-6">
			<?php get_template_part( 'template-parts/featured-image' ); ?>
		</div>
	</div>
	<div class="grid-x grid-margin-x">
		<div class="cell small-4">
			<h3>Press Releases</h3>
			<?php $args = array('post_type'=>array('press_releases'));
				query_posts($args); ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content-news', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<a href="" class="button">See more Phoseon press releases »</a>
		</div>
		<div class="cell small-4">
			<h3>In the News</h3>
			<?php $args = array('post_type'=>array('in_the_news'));
				query_posts($args); ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content-news', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<a href="" class="button">See more Phoseon news »</a>
		</div>
		<div class="cell small-4">
			<h3>Events</h3>
			<?php $args = array('post_type'=>array('events'));
				query_posts($args); ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content-events', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<a href="" class="button">See more Phoseon events »</a>
		</div>
	</div>
</div>

<?php get_footer();
