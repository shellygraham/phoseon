<?php
/**
 * Block Name: Hero
 *
 * This is the template that displays the hero block.
 */
?>

<section class="hero">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-6">
			    <h1><?php the_field('hero_title'); ?></h1>
			    <h2><?php the_field('hero_subtitle'); ?></h2>
			    
			    <?php if( get_field('hero_paragraph') ): ?>
			    <p><?php the_field('hero_paragraph'); ?></p>
			    <?php endif; ?>
			    
			    <?php if( get_field('hero_cta_button_link') ): ?>
			    <a href="<?php the_field('hero_cta_button_link'); ?>" class="button"><?php the_field('hero_cta_button_text'); ?></a>
			    <?php endif; ?>
			</div>
			<div class="cell small-6">
			    <?php
				$image = get_field('hero_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				?>
			</div>
		</div>
	</div>
</section>