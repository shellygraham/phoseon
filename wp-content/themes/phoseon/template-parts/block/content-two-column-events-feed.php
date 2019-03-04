<?php
/**
 * Block Name: Two Columns + Events Feed
 *
 * This is the template that displays the Two Columns block + PR Feed.
 */
?>

<section class="two-columns">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-4 bucket">
				<a class="column-img" href="<?php the_field('two_columns_events_button_link'); ?>">
			    <?php
				$image = get_field('two_columns_events_image');
				$size = 'featured-two'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('two_columns_events_header') ): ?>
			    <h3><?php the_field('two_columns_events_header'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('two_columns_events_text') ): ?>
			    <p><?php the_field('two_columns_events_text'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('two_columns_events_button_link') ): ?>
			    	<?php if( get_field('button_link_style_1') == 'button' ): ?>
						<a href="<?php the_field('two_columns_events_button_link'); ?>" class="button"><?php the_field('two_columns_events_button_text'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_1') == 'link' ): ?>
						<a href="<?php the_field('two_columns_events_button_link'); ?>"><?php the_field('two_columns_events_button_text'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
			<div class="cell large-4 bucket">
				<a class="column-img" href="<?php the_field('two_columns_events_button_link_2'); ?>">
			    <?php
				$image = get_field('two_columns_events_image_2');
				$size = 'featured-two'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('two_columns_events_header_2') ): ?>
			    <h3><?php the_field('two_columns_events_header_2'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('two_columns_events_text_2') ): ?>
			    <p><?php the_field('two_columns_events_text_2'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('two_columns_events_button_link_2') ): ?>
			    	<?php if( get_field('button_link_style_1') == 'button' ): ?>
						<a href="<?php the_field('two_columns_events_button_link_2'); ?>" class="button"><?php the_field('two_columns_events_button_text_2'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_1') == 'link' ): ?>
						<a href="<?php the_field('two_columns_events_button_link_2'); ?>"><?php the_field('two_columns_events_button_text_2'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
			<div class="cell large-4 bucket">
				<h3>Salons et Evénements</h3>
			<!-- All non-featured posts -->			
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'events',
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); 

			    
			    
			    ?>
			    <?php $postid = get_the_ID(); ?>
<article id="post-<?php echo $postID; ?>" <?php post_class(); ?>>
	<div class="grid-x grid-margin-x">
		<div class="cell small-12 event-posts">
			<h2><?php the_title(); ?></h2>
			<p><?php the_field('start_date', $postid); ?> - <?php the_field('end_date', $postid); ?><br>
			<?php the_field('event_location', $postid); ?></p>
			<a href="<?php the_field('event_website', $postid); ?>" target="_blank">Show website »</a>
		</div>
	</div>
</article>			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			</div>
		</div>
	</div>
</section>