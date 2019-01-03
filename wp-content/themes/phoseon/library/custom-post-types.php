<?php
	
	function create_post_type() {
/*
		register_post_type( 'global_news',
			array(
				'labels' => array(
					'name' => __( 'News' ),
					'singular_name' => __( 'News' )
				),
				'public' => true,
				'show_in_rest' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'news'),
			)
		);
*/

		register_post_type( 'press_releases',
			array(
				'labels' => array(
					'name' => __( 'Press Releases' ),
					'singular_name' => __( 'Press Release' )
				),
				'public' => true,
				'show_in_rest' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'press-releases'),
				'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'excerpt', 'revisions' ),
			)
		);

		register_post_type( 'in_the_news',
			array(
				'labels' => array(
					'name' => __( 'In the News' ),
					'singular_name' => __( 'In the News' )
				),
				'public' => true,
				'show_in_rest' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'in-the-news'),
				'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'excerpt', 'revisions' ),
			)
		);

		register_post_type( 'events',
			array(
				'labels' => array(
					'name' => __( 'Events' ),
					'singular_name' => __( 'Event' )
				),
				'public' => true,
				'show_in_rest' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'events'),
			)
		);

		register_post_type( 'products',
			array(
				'labels' => array(
					'name' => __( 'Products' ),
					'singular_name' => __( 'Product' )
				),
				'public' => true,
				'show_in_rest' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'products'),
			)
		);

	}
	add_action( 'init', 'create_post_type' );
	
	function news_cats_taxonomy() {  
	    register_taxonomy(  
	        'cpt_category',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'press_releases', 'in_the_news' ),       //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Category',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'cpt_category', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'news_cats_taxonomy');

	function news_year_taxonomy() {  
	    register_taxonomy(  
	        'news_year',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'press_releases', 'in_the_news' ),       //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Year',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'year', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'news_year_taxonomy');
	
	function events_cpt_taxonomy() {  
	    register_taxonomy(  
	        'events_cats',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        'events',        //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Division',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'events_cats', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'events_cpt_taxonomy');

	function products_emitting_taxonomy() {  
	    register_taxonomy(  
	        'emitting_cats',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        'products',        //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Emitting Window Size',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'emitting_cats', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'products_emitting_taxonomy');

	function products_irradiance_taxonomy() {  
	    register_taxonomy(  
	        'irradiance_cats',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        'products',        //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Irradiance Wavelength',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'irradiance_cats', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'products_irradiance_taxonomy');
	
	function create_tag_taxonomies() {  
	    register_taxonomy(  
	        'cpt_tags',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'press_releases', 'in_the_news' ),       //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Tags',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'cpt_tags', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'create_tag_taxonomies', 0 );