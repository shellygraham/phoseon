<?php
/**
 * Template part for mobile top bar menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="utility mobile">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-3 small-offset-2">
				<div class="top-bar-left">
					<div class="site-desktop-title top-bar-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<nav class="mobile-menu vertical menu" id="<?php foundationpress_mobile_menu_id(); ?>" role="navigation">
			<div class="cell small-7">
				<div class="utility-sub-wrapper">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="utility-home"><?php bloginfo( 'name' ); ?></a>
					<?php get_template_part( 'template-parts/country-nav' ); ?>
					<ul id="utility-blog" class="vertical menu accordion-menu" data-accordion-menu>
						<li><a href="#">Phoseon Blog</a>
						<ul class="menu vertical nested">
							<li><a href="https://blog.phoseon.com/led-curing" target="_blank">Industrial Curing</a></li>
							<li><a href="https://blog.phoseon.com/life-sciences" target="_blank">Life Sciences</a></li>
						</ul>
						</li>
					</ul>
					<a href="http://www.phoseon-support.com" class="utility-crc">Customer Resource Center</a>
					<?php get_search_form(); ?>
				</div>
			</div>
	<?php foundationpress_mobile_nav(); ?>
</nav>
