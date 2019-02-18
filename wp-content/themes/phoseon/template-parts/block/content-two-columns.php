<?php
/**
 * Block Name: Two Columns
 *
 * This is the template that displays the Two Columns block.
 */
?>

<section class="two-columns">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-6 bucket">
				<a class="column-img" href="<?php the_field('two_columns_button_link'); ?>">
			    <?php
				$image = get_field('two_columns_image');
				$size = 'featured-two'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('two_columns_header') ): ?>
			    <h3><?php the_field('two_columns_header'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('two_columns_text') ): ?>
			    <p><?php the_field('two_columns_text'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('two_columns_button_link') ): ?>
			    	<?php if( get_field('button_link_style_1') == 'button' ): ?>
						<a href="<?php the_field('two_columns_button_link'); ?>" class="button"><?php the_field('two_columns_button_text'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_1') == 'link' ): ?>
						<a href="<?php the_field('two_columns_button_link'); ?>"><?php the_field('two_columns_button_text'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
			<div class="cell large-6 bucket">
				<a class="column-img" href="<?php the_field('two_columns_button_link_2'); ?>">
			    <?php
				$image = get_field('two_columns_image_2');
				$size = 'featured-two'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('two_columns_header_2') ): ?>
			    <h3><?php the_field('two_columns_header_2'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('two_columns_text_2') ): ?>
			    <p><?php the_field('two_columns_text_2'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('two_columns_button_link_2') ): ?>
			    	<?php if( get_field('button_link_style_1') == 'button' ): ?>
						<a href="<?php the_field('two_columns_button_link_2'); ?>" class="button"><?php the_field('two_columns_button_text_2'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_1') == 'link' ): ?>
						<a href="<?php the_field('two_columns_button_link_2'); ?>"><?php the_field('two_columns_button_text_2'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
		</div>
	</div>
</section>