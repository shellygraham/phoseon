<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>
		<div class="utility">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell small-7">
						<div class="utility-sub-wrapper">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="utility-home"><?php bloginfo( 'name' ); ?></a>
							<?php get_template_part( 'template-parts/country-nav' ); ?>
							<ul id="utility-blog" class="vertical menu accordion-menu" data-accordion-menu>
								<li><a href="#">Phoseon Blog</a>
								<ul class="menu vertical nested">
									<li><a href="https://blog.phoseon.com/blog" target="_blank">Industrial Curing</a></li>
									<li><a href="https://blog.phoseon.com/life-sciences" target="_blank">Life Sciences</a></li>
								</ul>
								</li>
							</ul>
							<a href="http://www.phoseon-support.com" class="utility-crc">Customer Resource Center</a>
							<?php get_search_form(); ?>
						</div>
					</div>
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
		<nav class="site-navigation" role="navigation">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell small-8">
						<div class="top-bar-right">
							<?php foundationpress_top_bar_r(); ?>
							<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
								<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<div class="breadcrumbs">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-8">	
					<?php if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						} ?>
				</div>
			</div>
		</div>
	</div>