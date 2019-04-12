<?php
/*
Template Name: Case Studies
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
					<?php $the_query = new WP_Query( array(
						    'post_type' => 'case_studies',
							'order' => 'ASC',
							'orderby' => 'title',
						    ),
						);
						$terms = get_the_terms( $post->ID , 'case_study_cat' );
						$term = array_pop($terms);
						$tax_term = $term->name;
		
						while ( $the_query->have_posts() ) :
						    $the_query->the_post(); ?>
						    <div class="variation cell small-3 bucket">
							    <?php
								    the_post_thumbnail();
							    	the_title();
							    	
							    	the_excerpt();
							    ?>
						    </div>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
