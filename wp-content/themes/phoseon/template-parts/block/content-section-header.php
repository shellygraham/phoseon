<?php
/**
 * Block Name: Section Header
 *
 * This is the template that displays the Section Header block.
 */
?>

<section class="section-header">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">
			    <h2><?php the_field('section_header'); ?></h2>
			</div>
			<div class="cell small-6 small-offset-3">
			    <hr />
			</div>
			<div class="cell small-10 small-offset-1">
			    <?php if( get_field('section_paragraph') ): ?>
			    <p><?php the_field('section_paragraph'); ?></p>
			    <?php endif; ?>			    
			</div>
		</div>
	</div>
</section>