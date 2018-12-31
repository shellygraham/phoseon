<?php
/*
Template Name: Products by Emitting
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
				<?php 
					$posts = get_field('product_variation_type');
					if( $posts ): ?>
				<div class="grid-x grid-margin-x">
			    	<?php foreach( $posts as $p): ?>
        			<div class="variation cell small-6">
			        	<h4><a href="<?php the_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a></h4>
						<h4>Curing Area (mm)</h4>
						<p><?php the_field('curing_area', $p->ID); ?></p>
						<h4>Peak Irradiance:</h4>
						<p>Up to <?php the_field('max_peak_irradiance', $p->ID); ?></p>
			        </div>
				    <?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>

		</div>
	</div>
</div>
<?php get_footer();
