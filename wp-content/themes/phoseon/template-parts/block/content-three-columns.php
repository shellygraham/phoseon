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
				<a href="<?php the_field('three_columns_button_link'); ?>">
			    <?php
				$image = get_field('three_columns_image');
				$size = 'featured-three'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('three_columns_header') ): ?>
			    <h3><?php the_field('three_columns_header'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('three_columns_text') ): ?>
			    <p><?php the_field('three_columns_text'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('three_columns_button_link') ): ?>
			    	<?php if( get_field('button_link_style_1') == 'button' ): ?>
						<a href="<?php the_field('three_columns_button_link'); ?>" class="button"><?php the_field('three_columns_button_text'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_1') == 'link' ): ?>
						<a href="<?php the_field('three_columns_button_link'); ?>"><?php the_field('three_columns_button_text'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
			<div class="cell large-4 bucket">
				<a href="<?php the_field('three_columns_button_link_2'); ?>">
			    <?php
				$image = get_field('three_columns_image_2');
				$size = 'featured-three'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('three_columns_header_2') ): ?>
			    <h3><?php the_field('three_columns_header_2'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('three_columns_text_2') ): ?>
			    <p><?php the_field('three_columns_text_2'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('three_columns_button_link_2') ): ?>
			    	<?php if( get_field('button_link_style_1') == 'button' ): ?>
						<a href="<?php the_field('three_columns_button_link_2'); ?>" class="button"><?php the_field('three_columns_button_text_2'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_1') == 'link' ): ?>
						<a href="<?php the_field('three_columns_button_link_2'); ?>"><?php the_field('three_columns_button_text_2'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
			<div class="cell large-4 bucket">
				<a href="<?php the_field('three_columns_button_link_3'); ?>">
			    <?php
				$image = get_field('three_columns_image_3');
				$size = 'featured-three'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('three_columns_header_3') ): ?>
			    <h3><?php the_field('three_columns_header_3'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('three_columns_text_3') ): ?>
			    <p><?php the_field('three_columns_text_3'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('three_columns_button_link_3') ): ?>
			    	<?php if( get_field('button_link_style_1') == 'button' ): ?>
						<a href="<?php the_field('three_columns_button_link_3'); ?>" class="button"><?php the_field('three_columns_button_text_3'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_1') == 'link' ): ?>
						<a href="<?php the_field('three_columns_button_link_3'); ?>"><?php the_field('three_columns_button_text_3'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
		</div>
	</div>
</section>