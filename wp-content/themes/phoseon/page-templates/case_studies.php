<?php
/*
Template Name: Case Studies
*/

get_header(); ?>

<div class="product-wrapper case-studies">
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
						$terms = get_the_terms( $post->ID , 'case_study_cat' );
						$term = array_pop($terms);
						$tax_term = $term->slug;

						$args = array( 'post_type' => 'case_studies', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page'=> -1 );
						$the_query = new WP_Query( $args );
						while ( $the_query->have_posts() ) :
						    $the_query->the_post(); ?>
						    <div class="variation cell medium-3 bucket" style="padding-top: 20px;">
							    <a href="<?php the_field('company_link'); ?>"><?php the_post_thumbnail(); ?></a>
							    <div style="text-align: left; margin-top: 15px;">
								    <h4 style="margin-bottom: 0; font-size: 16px;"><?php the_title(); ?></h4>
								    <a href="<?php the_permalink(); ?>">
									<?php $terms = get_the_terms( $post->ID , 'case_study_cat' );
										 if ( $terms != null ){
										 foreach( $terms as $term ) {
										 print $term->name;
										 echo ' | ';
										 // Get rid of the other data stored in the object, since it's not needed
										 unset($term);
										} } ?>
										<a href="<?php the_field('pdf_link'); ?>" target="_blank">PDF</a>
								    </a>
								    <?php the_excerpt(); ?>
							    </div>
						    </div>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
