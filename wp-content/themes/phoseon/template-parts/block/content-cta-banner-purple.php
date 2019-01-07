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
			<div class="cell small-6 small-offset-2">			    
			    <?php if( get_field('cta_paragraph') ): ?>
			    <h4><?php the_field('cta_paragraph'); ?></h4>
			    <?php endif; ?>
			</div>
				<div class="cell small-4 cta-button">
			    <?php if( get_field('cta_banner_button_link') ): ?>
			    <a href="<?php the_field('cta_banner_button_link'); ?>" class="button"><?php the_field('cta_banner_button_text'); ?></a>
			    <?php endif; ?>
			</div>
		</div>
	</div>
</section>