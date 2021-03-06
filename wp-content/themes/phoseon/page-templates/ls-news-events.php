<?php
/*
Template Name: LS News/PR Template
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
						'terms'    => 'life-sciences',
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
						'terms'    => 'life-sciences',
					)
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post();
			    	get_template_part( 'template-parts/content-news', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<a href="http://wordpress.phoseon.com/life-sciences/resources/ls-news-events/life-sciences-press-releases/" class="button">See more Phoseon press releases »</a>
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
						'terms'    => 'life-sciences',
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
						'terms'    => 'life-sciences',
					)
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post();
			    	get_template_part( 'template-parts/content-news', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<a href="http://wordpress.phoseon.com/life-sciences/resources/ls-news-events/life-sciences-in-the-news/" class="button">See more Phoseon news »</a>
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
						'terms'    => 'life-sciences',
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
						'terms'    => 'life-sciences',
					)
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post();
			    	get_template_part( 'template-parts/content-events', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<a href="http://wordpress.phoseon.com/life-sciences/resources/life-sciences-events/" class="button">See more Phoseon events »</a>
		</div>
	</div>
</div>

<?php get_footer();
