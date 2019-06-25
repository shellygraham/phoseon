<?php
/*
Template Name: Partners
*/

get_header(); ?>

<div class="product-wrapper">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">
				<div class="grid-x grid-margin-x">		
					<?php 
						$args = array( 'post_type' => 'partners', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page'=> -1 );
						$the_query = new WP_Query( $args );
						while ( $the_query->have_posts() ) :
						    $the_query->the_post(); ?>
						    <div class="variation cell small-6 medium-3 bucket" style="padding-top: 20px;">
							    <a href="<?php the_field('partner_link'); ?>" target="_blank">
								    <?php the_post_thumbnail(); ?>
								</a>
						    </div>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
