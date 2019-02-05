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
				
				<?php if( have_rows('emitting_window_length_sorter') ): ?>
					<ul class="accordion" data-accordion>
						<?php $counter = 0; ?>
						<?php while ( have_rows('emitting_window_length_sorter') ) : the_row(); ?>
	    				<li <?php echo (++$counter); ?> class="accordion-item<?php if($counter==1) { echo ' is-active'; } ?>" data-accordion-item>
							<a href="#" class="accordion-title"><?php the_sub_field('emitting_window_length_header'); ?></a>
							<?php if( have_rows('product_types') ): ?>
							<div class="accordion-content" data-tab-content>
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
												<p><?php the_sub_field('peak_irradiance_@_wavelength'); ?></p>
												<?php wp_reset_postdata(); ?>
											</a>
								    	</div>
										<?php endforeach; ?>
									<?php endif; ?>
								<?php endwhile; ?>
								</div>
							</div>
							<?php endif; ?>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>	

			</div>
		</div>
	</div>
</div>
<?php get_footer();