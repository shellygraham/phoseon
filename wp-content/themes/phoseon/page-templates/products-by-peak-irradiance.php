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
						<?php 
							$posts = get_sub_field('product_picker');
							if( $posts ): ?>
							<?php foreach( $posts as $post ): ?>
							<?php setup_postdata($post); ?>
				    	<div class="variation cell small-3 bucket">
							<a href="<?php the_permalink(); ?>">
								<h5><?php the_title(); ?></h5>
								<?php the_post_thumbnail(); ?>
								<?php wp_reset_postdata(); ?>
							<?php endforeach; ?>
							<?php endif; ?>								
								<p><?php the_sub_field('peak_irradiance_@_wavelength'); ?></p>
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
