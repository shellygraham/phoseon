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

// Press Releases CPT

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

// In the news CPT

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

// Events CPT

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

// Products CPT

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
				'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
			)
		);

	}
	add_action( 'init', 'create_post_type' );

// NEWS Cats
	


// NEWS Year Cats



// PR Year Cats



// Events Cats

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

// Emitting Cats

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

// Irriadiance Cats

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

// NEWS Tags
	
	function news_tag_taxonomy() {  
	    register_taxonomy(  
	        'news_tags',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'in_the_news' ),       //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Tags',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'news_tag', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'news_tag_taxonomy', 0 );

// PR Tags
	
	function pr_tag_taxonomy() {  
	    register_taxonomy(  
	        'pr_tags',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'press_releases' ),       //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Tags',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'pr_tag', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'pr_tag_taxonomy', 0 );
	
// Families
	
	function family_taxonomy() {  
	    register_taxonomy(  
	        'family_tax',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'products' ),       //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Product Family',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'family', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'family_taxonomy', 0 );

// Cooling Method
	
	function cooling_taxonomy() {  
	    register_taxonomy(  
	        'cooling_tax',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'products' ),       //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Cooling Method',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'cooling-method', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'cooling_taxonomy', 0 );

// Wavelength
	
	function wavelength_taxonomy() {  
	    register_taxonomy(  
	        'wavelength_tax',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'products' ),       //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Wavelength',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'wavelength', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'wavelength_taxonomy', 0 );
	
// Category

	function cats_taxonomy() {  
	    register_taxonomy(  
	        'posts_category',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'post', 'press_releases', 'in_the_news' ),       //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Category',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'categories', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'cats_taxonomy');

// Year
	
	function postyear_taxonomy() {  
	    register_taxonomy(  
	        'posts_year',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'post', 'press_releases', 'in_the_news' ),       //post type name
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
	add_action( 'init', 'postyear_taxonomy', 0 );	