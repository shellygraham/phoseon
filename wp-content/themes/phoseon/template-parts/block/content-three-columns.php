<?php
/**
 * Block Name: Three Columns
 *
 * This is the template that displays the Three Columns block.
 */
?>

<section class="three-columns">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-4 bucket">
				<?php 
				$link1 = get_field('three_columns_button_link_1');
				
					$link_url1 = $link1['url'];
					$link_title1 = $link1['title'];
					$link_target1 = $link1['target'] ? $link1['target'] : '_self';
				?>
				<a href="<?php echo esc_url($link_url1); ?>">
			    <?php
				$image1 = get_field('three_columns_image');
				$size1 = 'featured-three'; // (thumbnail, medium, large, full or custom size)
				if( $image1 ) {
					echo wp_get_attachment_image( $image1, $size1 );
				}
				?>
				</a>
			    <?php if( get_field('three_columns_header') ): ?>
			    <h3><?php the_field('three_columns_header'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('three_columns_text') ): ?>
			    <p><?php the_field('three_columns_text'); ?></p>
			    <?php endif; ?>

		    	<?php if( get_field('three_columns_button_text') ): ?>
					<a class="button" href="<?php echo esc_url($link_url1); ?>" target="<?php echo esc_attr($link_target1); ?>"><?php the_field('three_columns_button_text'); ?></a>
				<?php endif; ?>
			</div>
			
			
			
			
			<div class="cell large-4 bucket">
				<?php 
				$link2 = get_field('three_columns_button_link_2');
				
					$link_url2 = $link2['url'];
					$link_title2 = $link2['title'];
					$link_target2 = $link2['target'] ? $link2['target'] : '_self';
				?>
				<a href="<?php echo esc_url($link_url2); ?>">
			    <?php
				$image2 = get_field('three_columns_image_2');
				$size2 = 'featured-three'; // (thumbnail, medium, large, full or custom size)
				if( $image2 ) {
					echo wp_get_attachment_image( $image2, $size2 );
				}
				?>
				</a>
			    <?php if( get_field('three_columns_header_2') ): ?>
			    <h3><?php the_field('three_columns_header_2'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('three_columns_text_2') ): ?>
			    <p><?php the_field('three_columns_text_2'); ?></p>
			    <?php endif; ?>
		    	<?php if( get_field('three_columns_button_text_2') ): ?>
					<a class="button" href="<?php echo esc_url($link_url2); ?>" target="<?php echo esc_attr($link_target2); ?>"><?php the_field('three_columns_button_text_2'); ?></a>
				<?php endif; ?>
			</div>
			
			
			
			
			<?php if( get_field('three_columns_text_3') ): ?>
			<div class="cell large-4 bucket">
				<?php 
				$link3 = get_field('three_columns_button_link_3');
				
					$link_url3 = $link3['url'];
					$link_title3 = $link3['title'];
					$link_target3 = $link3['target'] ? $link3['target'] : '_self';
				?>
				<a href="<?php echo esc_url($link_url3); ?>">
			    <?php
				$image3 = get_field('three_columns_image_3');
				$size3 = 'featured-three'; // (thumbnail, medium, large, full or custom size)
				if( $image3 ) {
					echo wp_get_attachment_image( $image3, $size3 );
				}
				?>
				</a>
			    <?php if( get_field('three_columns_header_3') ): ?>
			    <h3><?php the_field('three_columns_header_3'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('three_columns_text_3') ): ?>
			    <p><?php the_field('three_columns_text_3'); ?></p>
			    <?php endif; ?>
		    	<?php if( get_field('three_columns_button_text_3') ): ?>
					<a class="button" href="<?php echo esc_url($link_url3); ?>" target="<?php echo esc_attr($link_target3); ?>"><?php the_field('three_columns_button_text_3'); ?></a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>