<?php
/*
Template Name: Products by Cooling Method
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
			<div class="cell small-6 variation bucket">
				<h4><?php the_field('air_cooled_header'); ?></h4>
				<?php if( have_rows('air_cooled_products') ):
				    while ( have_rows('air_cooled_products') ) : the_row(); ?>								
						<?php
							$posts = get_sub_field('product_type_air');
							if( $posts ): ?>
							<div class="grid-x grid-margin-x">
						    	<?php foreach( $posts as $post): ?>
						    	<?php setup_postdata($post); ?>
			        			<div class="cell small-3">
				        			<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
										<h4><?php echo get_the_title(); ?></h4>
						        	</a>
						        </div>
							    <?php endforeach; ?>
							</div>
							<?php wp_reset_postdata(); ?>
							<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php the_field('air_cooled_products_content'); ?>
			</div>
			<div class="cell small-6 variation bucket">
				<h4><?php the_field('water_cooled_header'); ?></h4>
				<?php if( have_rows('water_cooled_products') ):
				    while ( have_rows('water_cooled_products') ) : the_row(); ?>								
						<?php
							$posts = get_sub_field('product_type_water');
							if( $posts ): ?>
							<div class="grid-x grid-margin-x">
						    	<?php foreach( $posts as $post): ?>
						    	<?php setup_postdata($post); ?>
			        			<div class="variation cell small-3 bucket">
				        			<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
										<h4><?php echo get_the_title(); ?></h4>
						        	</a>
						        </div>
							    <?php endforeach; ?>
							</div>
							<?php wp_reset_postdata(); ?>
							<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php the_field('water_cooled_products_content'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
