<?php
/*
Template Name: IC News/PR Template
*/
get_header(); ?>

<div class="grid-container news-main">
	<div class="grid-x grid-margin-x">
		<div class="cell small-12">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="grid-x grid-margin-x">
		<div class="cell medium-4">
			<h2>Press Releases</h2>

			<!-- Featured post -->
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'press_releases',
			    'tax_query' => array(
					'relation' => 'AND',
					array(
			            'taxonomy' => 'featured',
			            'field' => 'slug',
						'terms' => 'yes',
						'posts_per_page' => '1',
					),
					array(
						'taxonomy' => 'pr_division',
						'field'    => 'slug',
						'terms'    => 'industrial-curing',
					)
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>
			    	<?php get_template_part( 'template-parts/content-featured-news', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<!-- All non-featured posts -->
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'press_releases',
			    'tax_query' => array(
					'relation' => 'AND',
					array(
			            'taxonomy' => 'featured',
			            'field' => 'slug',
						'terms' => 'yes',
						'operator' => 'NOT IN',
					),
					array(
						'taxonomy' => 'pr_division',
						'field'    => 'slug',
						'terms'    => 'industrial-curing',
					)
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post();
			    	get_template_part( 'template-parts/content-news', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<a href="http://wordpress.phoseon.com/industrial-curing/resources/ic-news-events/industrial-curing-press-releases/" class="button">See more Phoseon press releases »</a>
		</div>
		<div class="cell medium-4">
			<h2>In the News</h2>

			<!-- Featured post -->
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'in_the_news',
			    'tax_query' => array(
					'relation' => 'AND',
					array(
			            'taxonomy' => 'featured',
			            'field' => 'slug',
						'terms' => 'yes',
						'posts_per_page' => '1',
					),
					array(
						'taxonomy' => 'itn_division',
						'field'    => 'slug',
						'terms'    => 'industrial-curing',
					)
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>
			    	<?php get_template_part( 'template-parts/content-featured-news-itn', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<!-- All non-featured posts -->
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'in_the_news',
			    'tax_query' => array(
					'relation' => 'AND',
					array(
			            'taxonomy' => 'featured',
			            'field' => 'slug',
						'terms' => 'yes',
						'operator' => 'NOT IN',
					),
					array(
						'taxonomy' => 'itn_division',
						'field'    => 'slug',
						'terms'    => 'industrial-curing',
					)
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post();
			    	get_template_part( 'template-parts/content-news', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<a href="http://wordpress.phoseon.com/industrial-curing/resources/ic-news-events/industrial-curing-in-the-news/" class="button"><?php the_field('phoseon_news_button','options'); ?></a>
		</div>
		<div class="cell medium-4">
			<h2>Events</h2>

			<!-- Featured post -->
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'events',
			    'tax_query' => array(
					'relation' => 'AND',
					array(
			            'taxonomy' => 'featured',
			            'field' => 'slug',
						'terms' => 'yes',
						'posts_per_page' => '1',
					),
					array(
						'taxonomy' => 'events_market',
						'field'    => 'slug',
						'terms'    => 'industrial-curing',
					)
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>
			    	<?php get_template_part( 'template-parts/content-featured-events', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<!-- All non-featured posts -->
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'events',
			    'tax_query' => array(
					'relation' => 'AND',
					array(
			            'taxonomy' => 'featured',
			            'field' => 'slug',
						'terms' => 'yes',
						'operator' => 'NOT IN',
					),
					array(
						'taxonomy' => 'events_market',
						'field'    => 'slug',
						'terms'    => 'industrial-curing',
					)
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post();
			    	get_template_part( 'template-parts/content-events', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<a href="http://wordpress.phoseon.com/industrial-curing/resources/industrial-curing-events/" class="button">See more Phoseon events »</a>
		</div>
	</div>
</div>

<?php get_footer();
