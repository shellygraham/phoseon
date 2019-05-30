<?php
/**
 * Block Name: CTA Banner (Blue)
 *
 * This is the template that displays the CTA Banner block.
 */
?>

<section class="cta-banner blue">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-6 small-offset-2">			    
			    <?php if( get_field('cta_paragraph') ): ?>
			    <h4><?php the_field('cta_paragraph'); ?></h4>
			    <?php endif; ?>
			</div>
				<div class="cell small-4 cta-button">
				<?php 
				$link_blue_banner = get_field('cta_banner_button_link');
				
					$link_blue_banner_url = $link_blue_banner['url'];
					$link_blue_banner_target = $link_blue_banner['target'] ? $link_blue_banner['target'] : '_self';
				?>
			    <?php if( get_field('cta_banner_button_link') ): ?>
			    <a href="<?php echo esc_url($link_blue_banner_url); ?>" class="button" target="<?php echo esc_attr($link_blue_banner_target); ?>"><?php the_field('cta_banner_button_text'); ?></a>
			    <?php endif; ?>
			</div>
		</div>
	</div>
</section>