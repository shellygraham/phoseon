<?php
/**
 * Block Name: Banner Hero
 *
 * This is the template that displays the hero block.
 */
?>

<section class="hero">
	<div class="grid-container banner-hero">
	    <?php
		$image = get_field('banner_hero_image');
		$size = 'cta-medium'; // (thumbnail, medium, large, full or custom size)
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}
		?>
		<div class="grid-x grid-margin-x banner-hero-container">
			<div class="cell small-8">
			    <h1><?php the_field('banner_hero_title'); ?></h1>
			    <h2><?php the_field('banner_hero_subtitle'); ?></h2>
			    
			    <?php if( get_field('banner_hero_paragraph') ): ?>
			    <p><?php the_field('banner_hero_paragraph'); ?></p>
			    <?php endif; ?>
			    
			    <?php if( get_field('banner_hero_cta_button_link') ): ?>
			    <a href="<?php the_field('banner_hero_cta_button_link'); ?>" class="button"><?php the_field('banner_hero_cta_button_text'); ?></a>
			    <?php endif; ?>
			</div>
		</div>
	</div>
</section>