<?php
/**
 * Block Name: Hero
 *
 * This is the template that displays the hero block.
 */
?>

<section class="hero">
	<div class="grid-x grid-margin-x">
		<div class="cell small-6">
		    <h1><?php the_field('hero_title'); ?></h1>
		    <h2><?php the_field('hero_subtitle'); ?></h2>
		    
		    <?php if( get_field('hero_paragraph') ): ?>
		    <p><?php the_field('hero_paragraph'); ?></p>
		    <?php endif; ?>
		    <?php
				$hero_link = get_field('hero_cta_button_link');
				
					$hero_link_url = $hero_link['url'];
					$hero_link_title = $hero_link['title'];
					$hero_link_target = $hero_link['target'] ? $hero_link['target'] : '_self';
				?>
	    	<?php if( get_field('hero_cta_button_text') ): ?>
				<a class="button" href="<?php echo esc_url($hero_link_url); ?>" target="<?php echo esc_attr($hero_link_target); ?>"><?php the_field('hero_cta_button_text'); ?></a>
			<?php endif; ?>
		</div>
		<div class="cell small-6">
		    <?php
				$hero_img_link = get_field('hero_image_link');
				
					$hero_img_link_url = $hero_img_link['url'];
					$hero_img_link_title = $hero_img_link['title'];
					$hero_img_link_target = $hero_img_link['target'] ? $hero_img_link['target'] : '_self';
				?>
			<a href="<?php echo esc_url($hero_img_link_url); ?>" target="<?php echo esc_attr($hero_img_link_target); ?>">
		    <?php
			$image = get_field('hero_image');
			$size = 'fp-small'; // (thumbnail, medium, large, full or custom size)
			if( $image ) {
				echo wp_get_attachment_image( $image, $size );
			}
			?>
			</a>
		</div>
	</div>
</section>