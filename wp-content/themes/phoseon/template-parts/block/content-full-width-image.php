<?php
/**
 * Block Name: Full Width Image
 *
 * This is the template that displays the Full Width Image block.
 */
?>

<section class="full-width-image">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">
			    <?php
				$image = get_field('full_width_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>		    
			</div>
		</div>
	</div>
</section>