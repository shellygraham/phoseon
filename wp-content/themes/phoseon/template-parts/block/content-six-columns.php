<?php
/**
 * Block Name: Six Columns
 *
 * This is the template that displays the Six Columns block.
 */
?>

<section class="four-columns">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-6 medium-3 large-2 bucket">
				<a href="<?php the_field('six_columns_button_link'); ?>">
			    <?php
				$image = get_field('six_columns_image');
				$size = 'featured-six'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('six_columns_header') ): ?>
			    <h3><?php the_field('six_columns_header'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_text') ): ?>
			    <p><?php the_field('six_columns_text'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_button_link') ): ?>
			    	<?php if( get_field('button_link_style_3') == 'button3' ): ?>
						<a href="<?php the_field('six_columns_button_link'); ?>" class="button"><?php the_field('six_columns_button_text'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_3') == 'link3' ): ?>
						<a href="<?php the_field('six_columns_button_link'); ?>"><?php the_field('six_columns_button_text'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
			<div class="cell small-6 medium-3 large-2 bucket">
				<a href="<?php the_field('six_columns_button_link_2'); ?>">
			    <?php
				$image = get_field('six_columns_image_2');
				$size = 'featured-six'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('six_columns_header_2') ): ?>
			    <h3><?php the_field('six_columns_header_2'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_text_2') ): ?>
			    <p><?php the_field('six_columns_text_2'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_button_link_2') ): ?>
			    	<?php if( get_field('button_link_style_3') == 'button3' ): ?>
						<a href="<?php the_field('six_columns_button_link_2'); ?>" class="button"><?php the_field('six_columns_button_text_2'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_3') == 'link3' ): ?>
						<a href="<?php the_field('six_columns_button_link_2'); ?>"><?php the_field('six_columns_button_text_2'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
			<div class="cell small-6 medium-3 large-2 bucket">
				<a href="<?php the_field('six_columns_button_link_3'); ?>">
			    <?php
				$image = get_field('six_columns_image_3');
				$size = 'featured-six'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('six_columns_header_3') ): ?>
			    <h3><?php the_field('six_columns_header_3'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_text_3') ): ?>
			    <p><?php the_field('six_columns_text_3'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_button_link_3') ): ?>
			    	<?php if( get_field('button_link_style_3') == 'button3' ): ?>
						<a href="<?php the_field('six_columns_button_link_3'); ?>" class="button"><?php the_field('six_columns_button_text_3'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_3') == 'link3' ): ?>
						<a href="<?php the_field('six_columns_button_link_3'); ?>"><?php the_field('six_columns_button_text_3'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
			<div class="cell small-6 medium-3 large-2 bucket">
				<a href="<?php the_field('six_columns_button_link_4'); ?>">
			    <?php
				$image = get_field('six_columns_image_4');
				$size = 'featured-six'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('six_columns_header_4') ): ?>
			    <h3><?php the_field('six_columns_header_4'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_text_4') ): ?>
			    <p><?php the_field('six_columns_text_4'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_button_link_4') ): ?>
			    	<?php if( get_field('button_link_style_3') == 'button3' ): ?>
						<a href="<?php the_field('six_columns_button_link_4'); ?>" class="button"><?php the_field('six_columns_button_text_4'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_3') == 'link3' ): ?>
						<a href="<?php the_field('six_columns_button_link_4'); ?>"><?php the_field('six_columns_button_text_4'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
			<div class="cell small-6 medium-3 large-2 bucket">
				<a href="<?php the_field('six_columns_button_link_5'); ?>">
			    <?php
				$image = get_field('six_columns_image_5');
				$size = 'featured-six'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('six_columns_header_5') ): ?>
			    <h3><?php the_field('six_columns_header_5'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_text_5') ): ?>
			    <p><?php the_field('six_columns_text_5'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_button_link_5') ): ?>
			    	<?php if( get_field('button_link_style_3') == 'button3' ): ?>
						<a href="<?php the_field('six_columns_button_link_5'); ?>" class="button"><?php the_field('six_columns_button_text_5'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_3') == 'link3' ): ?>
						<a href="<?php the_field('six_columns_button_link_5'); ?>"><?php the_field('six_columns_button_text_5'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
			<div class="cell small-6 medium-3 large-2 bucket">
				<a href="<?php the_field('six_columns_button_link_6'); ?>">
			    <?php
				$image = get_field('six_columns_image_6');
				$size = 'featured-six'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
				</a>
			    <?php if( get_field('six_columns_header_6') ): ?>
			    <h3><?php the_field('six_columns_header_6'); ?></h3>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_text_6') ): ?>
			    <p><?php the_field('six_columns_text_6'); ?></p>
			    <?php endif; ?>
			    <?php if( get_field('six_columns_button_link_6') ): ?>
			    	<?php if( get_field('button_link_style_3') == 'button3' ): ?>
						<a href="<?php the_field('six_columns_button_link_6'); ?>" class="button"><?php the_field('six_columns_button_text_6'); ?></a>
					<?php endif; ?>
					<?php if( get_field('button_link_style_3') == 'link3' ): ?>
						<a href="<?php the_field('six_columns_button_link_6'); ?>"><?php the_field('six_columns_button_text_6'); ?></a>
					<?php endif; ?>
			    <?php endif; ?>
			</div>
		</div>
	</div>
</section>