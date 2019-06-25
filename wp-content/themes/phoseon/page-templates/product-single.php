<?php
/**
Template Name: Product Single
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
			<?php
				$slug = get_post_field( 'post_name');

				$args = array(
				    'post_type' => 'products',
				    'tax_query' => array(
				        array(
				            'taxonomy' => 'family_tax',
				            'field' => 'slug', //can be set to ID
				            'terms' => $slug //if field is ID you can reference by cat/term number
				        )
				    )
				);
				$query = new WP_Query( $args );
			?>
				<div class="grid-x grid-margin-x">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<div class="variation cell small-12 medium-4 bucket">
					<h3><?php the_title() ;?></h3>
					<?php the_post_thumbnail(); ?>
	
					<hr />
					<h4><?php the_field('emitting_window_sizes','options'); ?>:</h4>
					<ul>
					<?php
						$term_list = wp_get_post_terms($post->ID, 'emitting_cats', array("fields" => "all"));
						foreach($term_list as $term_single) {
						echo '<li>' . $term_single->name . '<span> | </span></li>';
						} 
					?>
					</ul>
					<hr />
					<h4><?php the_field('peak_irradiance_wavelength','options'); ?>:</h4>
					<ul>
					<?php
						$term_list2 = wp_get_post_terms($post->ID, 'irradiance_cats', array("fields" => "all"));
						foreach($term_list2 as $term_single2) {
						echo '<li>' . $term_single2->name . '<span> | </span></li>';
						} 
					?>
					</ul>			
					<hr />
					<div class="key-features">
						<?php the_content(); ?>	
					</div>		
					
				</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="grid-container product-footer">
		<div class="grid-x grid-margin-x">
			<div class="cell small-8">
				<?php the_field('bottom_content_open_content'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();