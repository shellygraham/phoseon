<?php
/**
 * Customize the output of menus for Social Walker
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/**
 * Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
 */

if ( ! class_exists( 'Foundationpress_Social_Walker' ) ) :
	class Foundationpress_Social_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent  = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\"menu\">\n";
		}
	}
endif;
