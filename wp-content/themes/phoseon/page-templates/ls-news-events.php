<?php
/*
Template Name: LS News/PR Template
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
			<h2>Press Releases</h2>
			<?php $args = array('post_type'=>array('press_releases'), 'tax_query' => array(
				        array(
				            'taxonomy' => 'posts_category',
				            'field' => 'slug', //can be set to ID
				            'terms' => 'life-sciences' //if field is ID you can reference by cat/term number
				        )
				    ));
				query_posts($args); ?>
				<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content-news', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<a href="/life-sciences/resources/ls-news-events/life-sciences-press-releases/" class="button">See more Phoseon press releases »</a>
		</div>
		<div class="cell small-4">
			<h2>In the News</h2>
			<?php $args = array('post_type'=>array('in_the_news'), 'tax_query' => array(
				        array(
				            'taxonomy' => 'posts_category',
				            'field' => 'slug', //can be set to ID
				            'terms' => 'life-sciences' //if field is ID you can reference by cat/term number
				        )
				    ));
				query_posts($args); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content-news', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<a href="/life-sciences/resources/ls-news-events/life-sciences-in-the-news/" class="button">See more Phoseon news »</a>
		</div>
		<div class="cell small-4">
			<h2>Events</h2>
			<?php $args = array('post_type'=>array('events'), 'tax_query' => array(
				        array(
				            'taxonomy' => 'events_market',
				            'field' => 'slug', //can be set to ID
				            'terms' => 'life-sciences' //if field is ID you can reference by cat/term number
				        )
				    ));
				query_posts($args); ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content-events', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<a href="/life-sciences/resources/life-sciences-events" class="button">See more Phoseon events »</a>
		</div>
	</div>
</div>

<?php get_footer();
