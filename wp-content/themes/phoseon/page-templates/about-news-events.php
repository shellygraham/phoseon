<?php
/*
Template Name: Global News Template
*/
get_header(); ?>

<div class="grid-container news-main">
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
			<?php the_post_thumbnail('fp-small'); ?>
		</div>
	</div>
	<div class="grid-x grid-margin-x">
		<div class="cell small-4">
			<h2>Press Releases</h2>

			<!-- Featured post -->
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'press_releases',
			    'tax_query' => array(
			        array (
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
			        array (
			            'taxonomy' => 'featured',
			            'field' => 'slug',
						'terms' => 'yes',
						'operator' => 'NOT IN',
						'posts_per_page' => '5'
			        )
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post();
			    	get_template_part( 'template-parts/content-news', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<a href="/press-releases" class="button"><?php the_field('phoseon_pr_button','option'); ?></a>
		</div>
		<div class="cell small-4">
			<h2>In the News</h2>
			<!-- Featured post -->
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'in_the_news',
			    'tax_query' => array(
			        array (
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
			        array (
			            'taxonomy' => 'featured',
			            'field' => 'slug',
						'terms' => 'yes',
						'operator' => 'NOT IN',
						'posts_per_page' => '5',
			        )
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post();
			    	get_template_part( 'template-parts/content-news', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<a href="/in-the-news" class="button"><?php the_field('phoseon_news_button','options'); ?></a>
		</div>
		<div class="cell small-4">
			<h2>Events</h2>
			<!-- Featured post -->
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'events',
			    'tax_query' => array(
			        array (
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
			        array (
			            'taxonomy' => 'featured',
			            'field' => 'slug',
						'terms' => 'yes',
						'operator' => 'NOT IN',
						'posts_per_page' => '5',
			        )
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post();
			    	get_template_part( 'template-parts/content-events', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>
				<a href="/events" class="button"><?php the_field('phoseon_events_button','option'); ?></a>
		</div>
	</div>
</div>

<?php get_footer();
