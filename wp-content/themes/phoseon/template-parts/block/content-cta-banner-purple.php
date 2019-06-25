<?php
/**
 * Block Name: CTA Banner (Purple)
 *
 * This is the template that displays the CTA Banner block.
 */
?>

<section class="cta-banner purple">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-6 medium-offset-2">			    
			    <?php if( get_field('cta_paragraph') ): ?>
			    <h4><?php the_field('cta_paragraph'); ?></h4>
			    <?php endif; ?>
			</div>
				<div class="cell small-12 medium-4 cta-button">
				<?php 
				$link_purple_banner = get_field('cta_banner_button_link');
				
					$link_purple_banner_url = $link_purple_banner['url'];
					$link_purple_banner_target = $link_purple_banner['target'] ? $link_purple_banner['target'] : '_self';
				?>
			    <?php if( get_field('cta_banner_button_link') ): ?>
			    <a href="<?php echo esc_url($link_purple_banner_url); ?>" class="button" target="<?php echo esc_attr($link_purple_banner_target); ?>"><?php the_field('cta_banner_button_text'); ?></a>
			    <?php endif; ?>
			</div>
		</div>
	</div>
</section>