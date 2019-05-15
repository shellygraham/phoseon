<?php
/**
 * Block Name: News Banner
 *
 * This is the template that displays the News Banner block.
 */
?>

<section class="cta-banner purple news-banner">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">			    
			    <h2><?php the_field('news_banner_title'); ?></h2>
			</div>
		</div>
		<div class="grid-x grid-margin-x">
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'press_releases',
			    'posts_per_page' => '4',
			    'tax_query' => array(
					'taxonomy' => 'pr_division',
					'field'    => 'slug',
					'terms'    => 'industrial-curing',
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>
	    		<?php get_template_part( 'template-parts/content-news-horiz', get_post_format() );
			endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">	
		    <?php if( get_field('cta_banner_button_link') ): ?>
		    <a href="<?php the_field('cta_banner_button_link'); ?>" class="button"><?php the_field('cta_banner_button_text'); ?></a>
		    <?php endif; ?>
			</div>
		</div>
	</div>
</section>