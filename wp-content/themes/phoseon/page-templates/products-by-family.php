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
				<div class="grid-x grid-margin-x">
				<?php if( have_rows('product_family_selector') ):
			    	while ( have_rows('product_family_selector') ) : the_row(); ?>	
			    	<div class="variation cell small-3 bucket">
						<a href="<?php the_sub_field('product_family_link'); ?>">
							<?php 
								
								$image = get_sub_field('product_image');
								$size = 'full'; // (thumbnail, medium, large, full or custom size)
								
								if( $image ) {
								
								echo wp_get_attachment_image( $image, $size );
								
								}
								
							?>
							<h3><?php the_sub_field('product_family_name'); ?></h3>
							<hr />
							<h4>Curing Area (mm)</h4>
							<p class="center-align"><?php the_sub_field('curing_area'); ?></p>
							<hr />
							<h4>Peak Irradiance:</h4>
							<p class="center-align">Up to <?php the_sub_field('peak_irradiance'); ?></p>
				    	</a>
			        </div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
