<?php
/*
Template Name: Products by Peak Irradiance
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
			<?php if( have_rows('emitting_window_length_sorter') ):
			    while ( have_rows('emitting_window_length_sorter') ) : the_row(); ?>								
				<h4><?php the_sub_field('emitting_window_length_header'); ?></h4>
					<?php if( have_rows('product_types') ): ?>
					<div class="grid-x grid-margin-x">
					    <?php while ( have_rows('product_types') ) : the_row(); ?>	
					    	<div class="cell small-3">
								<?php 
									$posts = get_sub_field('product_link');
									if( $posts ): ?>
									<?php foreach( $posts as $post ): ?>
									<?php setup_postdata($post); ?>
										<a href="<?php the_permalink(); ?>">
										<?php wp_reset_postdata(); ?>
									<?php endforeach; ?>
								<?php endif; ?>
								<h5><?php the_sub_field('product_name'); ?></h5>
			        			<?php 										
									$image = get_sub_field('product_sub_image');
									$size = 'full'; // (thumbnail, medium, large, full or custom size)
									if( $image ) {
										echo wp_get_attachment_image( $image, $size );
									}
									?>
								<?php
								$terms = get_sub_field('peak_irradiance_@_wavelength');
								if( $terms ): ?>
									<?php foreach( $terms as $term ): ?>
										<p><?php echo $term->name; ?></p>
									<?php endforeach; ?>
								<?php endif; ?>
								</a>
					    	</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
