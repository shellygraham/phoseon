<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer global-footer">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
<!--
			<div class="footer-triangle">
				<div></div>
			</div>
-->
			<div class="cell medium-3 medium-offset-1">
				<?php get_template_part( 'template-parts/social-nav' ); ?>
			</div>
			<div class="cell medium-8">
				<?php get_template_part( 'template-parts/footer-nav' ); ?>
				<p class="copy"><?php the_field('footer_subtext','options'); ?></p>
			</div>
		</div>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>