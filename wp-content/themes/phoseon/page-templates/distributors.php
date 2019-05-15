<?php
/*
Template Name: Distributors
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
					<ul class="accordion" data-accordion>
						<li class="accordion-item is-active" data-accordion-item>
							<a href="#" class="accordion-title"><span></span>Americas</a>
							<div class="accordion-content" data-tab-content>
								<div class="grid-x grid-margin-x">
								<?php 
									$args = array( 'post_type' => 'distributors', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page'=> -1, 'tax_query' => array( array( 'taxonomy' => 'distributor_regions', 'field' => 'slug', 'terms' => 'americas', ), ), );
									$the_query = new WP_Query( $args );
									while ( $the_query->have_posts() ) :
									    $the_query->the_post(); ?>
									    <div class="variation cell small-3 bucket" style="padding-top: 20px;">
										    <a href="<?php the_field('distributor_link'); ?>"><?php the_post_thumbnail(); ?></a>
										    <div style="text-align: left; margin-top: 15px;">
											    <h4 style="margin-bottom: 0; font-size: 16px;"><?php the_title(); ?></h4>
												<a href="mailto:<?php the_field('distributor_email'); ?>"><?php the_field('distributor_email'); ?></a>
										    </div>
									    </div>
									<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							</div>
						</li>
						<li class="accordion-item" data-accordion-item>
							<a href="#" class="accordion-title"><span></span>Asia-Pacific</a>
							<div class="accordion-content" data-tab-content>
								<div class="grid-x grid-margin-x">
								<?php 
									$args = array( 'post_type' => 'distributors', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page'=> -1, 'tax_query' => array( array( 'taxonomy' => 'distributor_regions', 'field' => 'slug', 'terms' => 'asia-pacific', ), ), );
									$the_query = new WP_Query( $args );
									while ( $the_query->have_posts() ) :
									    $the_query->the_post(); ?>
									    <div class="variation cell small-3 bucket" style="padding-top: 20px;">
										    <a href="<?php the_field('distributor_link'); ?>"><?php the_post_thumbnail(); ?></a>
										    <div style="text-align: left; margin-top: 15px;">
											    <h4 style="margin-bottom: 0; font-size: 16px;"><?php the_title(); ?></h4>
												<a href="mailto:<?php the_field('distributor_email'); ?>"><?php the_field('distributor_email'); ?></a>
										    </div>
									    </div>
									<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							</div>
						</li>
						<li class="accordion-item" data-accordion-item>
							<a href="#" class="accordion-title"><span></span>Europe, the Middle East & Africa</a>
							<div class="accordion-content" data-tab-content>
								<div class="grid-x grid-margin-x">
								<?php 
									$args = array( 'post_type' => 'distributors', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page'=> -1, 'tax_query' => array( array( 'taxonomy' => 'distributor_regions', 'field' => 'slug', 'terms' => 'europe-middle-east-africa', ), ), );
									$the_query = new WP_Query( $args );
									while ( $the_query->have_posts() ) :
									    $the_query->the_post(); ?>
									    <div class="variation cell small-3 bucket" style="padding-top: 20px;">
										    <a href="<?php the_field('distributor_link'); ?>"><?php the_post_thumbnail(); ?></a>
										    <div style="text-align: left; margin-top: 15px;">
											    <h4 style="margin-bottom: 0; font-size: 16px;"><?php the_title(); ?></h4>
												<a href="mailto:<?php the_field('distributor_email'); ?>"><?php the_field('distributor_email'); ?></a>
										    </div>
									    </div>
									<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							</div>
						</li>
					</ul>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
