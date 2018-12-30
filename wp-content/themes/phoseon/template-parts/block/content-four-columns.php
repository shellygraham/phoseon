<?php
/**
 * Block Name: Four Columns
 *
 * This is the template that displays the Four Columns block.
 */
?>

<section class="four-columns">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-3">
			    <?php
				$image = get_field('four_columns_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			    <?php if( get_field('four_columns_header') ): ?>
			    <h3><?php the_field('four_columns_header'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('four_columns_text') ): ?>
			    <p><?php the_field('four_columns_text'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('four_columns_button_link') ): ?>
			    <a href="<?php the_field('four_columns_button_link'); ?>" class="button"><?php the_field('four_columns_button_text'); ?></a>
			    <?php endif; ?>
			</div>
			<div class="cell small-3">
			    <?php
				$image = get_field('four_columns_image_2');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			    <?php if( get_field('four_columns_header_2') ): ?>
			    <h3><?php the_field('four_columns_header_2'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('four_columns_text_2') ): ?>
			    <p><?php the_field('four_columns_text_2'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('four_columns_button_link_2') ): ?>
			    <a href="<?php the_field('four_columns_button_link_2'); ?>" class="button"><?php the_field('four_columns_button_text_2'); ?></a>
			    <?php endif; ?>
			</div>
			<div class="cell small-3">
			    <?php
				$image = get_field('four_columns_image_3');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			    <?php if( get_field('four_columns_header_3') ): ?>
			    <h3><?php the_field('four_columns_header_3'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('four_columns_text_3') ): ?>
			    <p><?php the_field('four_columns_text_3'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('four_columns_button_link_3') ): ?>
			    <a href="<?php the_field('four_columns_button_link_3'); ?>" class="button"><?php the_field('four_columns_button_text_3'); ?></a>
			    <?php endif; ?>
			</div>
			<div class="cell small-3">
			    <?php
				$image = get_field('four_columns_image_4');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			    <?php if( get_field('four_columns_header_4') ): ?>
			    <h3><?php the_field('four_columns_header_4'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('four_columns_text_4') ): ?>
			    <p><?php the_field('four_columns_text_4'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('four_columns_button_link_4') ): ?>
			    <a href="<?php the_field('four_columns_button_link_4'); ?>" class="button"><?php the_field('four_columns_button_text_4'); ?></a>
			    <?php endif; ?>
			</div>
		</div>
	</div>
</section>