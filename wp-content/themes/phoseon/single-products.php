<?php
/**
 * The template for displaying products singles
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
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
			<div class="cell small-8">
				<?php if( have_rows('product_variations') ): ?>
				<div class="grid-x grid-margin-x">
				    <?php while ( have_rows('product_variations') ) : the_row(); ?>
			        <div class="variation cell small-6">
			        	<h4><?php the_sub_field('product_variation_name'); ?></h4>
	        			<?php 										
							$image = get_sub_field('product_variation_image');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
						<h5>Emitting Window Sizes:</h5>
						<?php 
							$terms = get_sub_field('emitting_window_sizes');
							if( $terms ): ?>
							<ul>
							<?php foreach( $terms as $term ): ?>
								<li><?php echo $term->name; ?></li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>
						<h5>Peak Irradiance @ Wavelength:</h5>
						<?php 
							$terms = get_sub_field('peak_irradiance_@_wavelength');
							if( $terms ): ?>
							<ul>
							<?php foreach( $terms as $term ): ?>
								<li><?php echo $term->name; ?></li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>
			        </div>
				    <?php endwhile; ?>
				</div>				
				<?php endif; ?>
			</div>
			<div class="cell small-4">
				<?php the_field('right_sidebar_open_content'); ?>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-8">
				<?php the_field('bottom_content_open_content'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();