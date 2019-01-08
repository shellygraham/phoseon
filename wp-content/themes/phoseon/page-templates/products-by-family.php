<?php
/*
Template Name: Products by Family
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
			<?php if( have_rows('product_family_selector') ):
			    while ( have_rows('product_family_selector') ) : the_row(); ?>			
				<?php
					$posts = get_sub_field('product_type');
					if( $posts ): ?>
					<div class="grid-x grid-margin-x">
				    	<?php foreach( $posts as $post): ?>
				    	<?php setup_postdata($post); ?>
	        			<div class="variation cell small-3 bucket">
				        	<a href="<?php the_permalink(); ?>">
		        			<?php 										
								$image = get_field('product_family_image');
								$size = 'full'; // (thumbnail, medium, large, full or custom size)
								if( $image ) {
									echo wp_get_attachment_image( $image, $size );
								}
								?>
								<h3><?php echo get_the_title(); ?></h3>
							</a>
							<hr />
							<h4>Curing Area (mm)</h4>
							<p class="center-align"><?php the_field('curing_area'); ?></p>
							<hr />
							<h4>Peak Irradiance:</h4>
							<p class="center-align">Up to <?php the_field('max_peak_irradiance'); ?></p>
				        </div>
					    <?php endforeach; ?>
					</div>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>

		</div>
	</div>
</div>
<?php get_footer();
