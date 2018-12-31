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
				'has_archive' => true,
				'rewrite' => array('slug' => 'news/press-releases'),
			)
		);

		register_post_type( 'in_the_news',
			array(
				'labels' => array(
					'name' => __( 'In the News' ),
					'singular_name' => __( 'In the News' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'news/in-the-news'),
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
	        'category',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        array( 'press_releases', 'in_the_news' ),       //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Category',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'category', // This controls the base slug that will display before each term
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
	            'label' => 'Categories',  //Display name
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

	function products_cpt_taxonomy() {  
	    register_taxonomy(  
	        'products_cats',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
	        'products',        //post type name
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Categories',  //Display name
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'products_cats', // This controls the base slug that will display before each term
	                'with_front' => false // Don't display the category base before 
	            ),
	            'show_in_rest' => true,
	        )  
	    );  
	}  
	add_action( 'init', 'products_cpt_taxonomy');	