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
			    <h1><?php the_field('section_header'); ?></h1>
			    <hr />
			    <?php if( get_field('section_paragraph') ): ?>
			    <p><?php the_field('section_paragraph'); ?></p>
			    <?php endif; ?>			    
			</div>
		</div>
	</div>
</section>