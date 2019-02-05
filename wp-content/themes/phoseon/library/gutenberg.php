<?php

if ( ! function_exists( 'foundationpress_gutenberg_support' ) ) :
	function foundationpress_gutenberg_support() {

    // Add foundation color palette to the editor
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Primary Color', 'foundationpress' ),
            'slug' => 'primary',
            'color' => '#1779ba',
        ),
        array(
            'name' => __( 'Secondary Color', 'foundationpress' ),
            'slug' => 'secondary',
            'color' => '#767676',
        ),
        array(
            'name' => __( 'Success Color', 'foundationpress' ),
            'slug' => 'success',
            'color' => '#3adb76',
        ),
        array(
            'name' => __( 'Warning color', 'foundationpress' ),
            'slug' => 'warning',
            'color' => '#ffae00',
        ),
        array(
            'name' => __( 'Alert color', 'foundationpress' ),
            'slug' => 'alert',
            'color' => '#cc4b37',
        )
    ) );

	}

	add_action( 'after_setup_theme', 'foundationpress_gutenberg_support' );
endif;

// Custom ACF Blocks

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a banner hero block
		acf_register_block(array(
			'name'				=> 'banner-hero',
			'title'				=> __('Banner Hero Block'),
			'description'		=> __('Custom banner hero block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'banner-hero', 'layout' ),
		));

		// register a hero block
		acf_register_block(array(
			'name'				=> 'hero',
			'title'				=> __('Hero Block'),
			'description'		=> __('Custom hero block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'hero', 'layout' ),
		));

		// register a three column block
		acf_register_block(array(
			'name'				=> 'three-columns',
			'title'				=> __('Three Columns'),
			'description'		=> __('Three column block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'three-columns', 'layout' ),
		));

		// register a four column block
		acf_register_block(array(
			'name'				=> 'four-columns',
			'title'				=> __('Four Columns'),
			'description'		=> __('Four column block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'four-columns', 'layout' ),
		));

		// register a six column block
		acf_register_block(array(
			'name'				=> 'six-columns',
			'title'				=> __('Six Columns'),
			'description'		=> __('Six column block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'six-columns', 'layout' ),
		));

		// register a section header block
		acf_register_block(array(
			'name'				=> 'section-header',
			'title'				=> __('Section Header'),
			'description'		=> __('Section Header.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'section-header', 'layout' ),
		));

		// register a full-width image block
		acf_register_block(array(
			'name'				=> 'full-width-image',
			'title'				=> __('Full Width Image'),
			'description'		=> __('Full Width Image.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'full-width-image', 'layout' ),
		));

		// register a cta-banner block
		acf_register_block(array(
			'name'				=> 'cta-banner-purple',
			'title'				=> __('CTA Banner (purple)'),
			'description'		=> __('CTA Banner (purple).'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'cta-banner-purple', 'layout' ),
		));

		// register a cta-banner block
		acf_register_block(array(
			'name'				=> 'cta-banner-blue',
			'title'				=> __('CTA Banner (blue)'),
			'description'		=> __('CTA Banner (blue).'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'cta-banner-blue', 'layout' ),
		));

		// register a cta-banner block
		acf_register_block(array(
			'name'				=> 'gravity-form',
			'title'				=> __('Gravity Form'),
			'description'		=> __('Gravity Form.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'gravity-form', 'layout' ),
		));

	}
}

function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}
