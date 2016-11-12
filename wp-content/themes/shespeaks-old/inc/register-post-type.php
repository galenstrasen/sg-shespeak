<?php

// Creates custom post type called "Clients"
// http://codex.wordpress.org/Function_Reference/register_post_type

add_action( 'init', 'create_post_type' );

	function create_post_type() {


		register_post_type( 'projects',
			array (	'label' => 'Projects',
				'description' => 'Projects',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'has_archive' => true,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array('title','editor','thumbnail','author','excerpt'),
				'taxonomies' => array(),
				'menu_icon' => 'dashicons-megaphone',

				'labels' =>
					array (
	  					'name' => 'Projects', /* This is the Title of the Group */
	  					'singular_name' => 'Project', /* This is the individual type */
						'menu_name' => 'Projects', /* The add new menu item */
						'add_new' => 'Add Project', /* Add New Display Title */
						'add_new_item' => 'Add New Project',
						'edit' => 'Edit', /* Edit Dialog */
						'edit_item' => 'Edit Project', /* Edit Display Title */
						'new_item' => 'New Project', /* New Display Title */
						'view_item' => 'View Project', /* View Display Title */
						'search_items' => 'Search Projects', /* Search Custom Type Title */
						'not_found' => 'No Projects Found', /* This displays if there are no entries yet */
						'not_found_in_trash' => 'No Projects Found in Trash' /* This displays if there is nothing in the trash */
						),
			)
	); // End Projects Post type			
			
	
/*
	register_post_type( 'postcards',
			array (	'label' => 'Postcards',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				'taxonomies' => array(),
				'labels' =>
					array (
	  					'name' => 'Postcards', 
	  					'singular_name' => 'Postcard', 
						'menu_name' => 'Postcards',
						'add_new' => 'Add Postcard', 
						'add_new_item' => 'Add New Postcard',
						'edit' => 'Edit', 
						'edit_item' => 'Edit Postcard',
						'new_item' => 'New Postcard',
						'view_item' => 'View Postcard',
						'search_items' => 'Search Postcards',
						'not_found' => 'No Postcards Found',
						'not_found_in_trash' => 'No Postcards Found in Trash' 
						),
				)
			); */
/*
	register_post_type( 'Projects',
			array (	'label' => 'Project',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				'taxonomies' => array(),
				'labels' =>
					array (
	  					'name' => 'Projects', 
	  					'singular_name' => 'Project',
						'menu_name' => 'Projects', 
						'add_new' => 'Add Project',
						'add_new_item' => 'Add New Project',
						'edit' => 'Edit', 
						'edit_item' => 'Edit Project', 
						'new_item' => 'New Project', 
						'view_item' => 'View Project', 
						'search_items' => 'Search Projects', 
						'not_found' => 'No Projects Found',
						'not_found_in_trash' => 'No Projects Found in Trash' 
						),
				)
			);

	register_post_type( 'isupport',
			array (	'label' => 'iSupport',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				'taxonomies' => array(),
				'labels' =>
					array (
	  					'name' => 'iSupport', 
	  					'singular_name' => 'iSupport',						
	  					'menu_name' => 'iSupport', 
						'add_new' => 'Add iSupport',
						'add_new_item' => 'Add New iSupport',
						'edit' => 'Edit', 
						'edit_item' => 'Edit iSupport',
						'new_item' => 'New iSupport',
						'view_item' => 'View iSupport',
						'search_items' => 'Search iSupport',
						'not_found' => 'No iSupport Found',
						'not_found_in_trash' => 'No iSupport Found in Trash'
						),
				)
			);
			
		register_post_type( 'photos',
			array (	'label' => 'Photos',
				'description' => '',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				'taxonomies' => array(),
				'labels' =>
					array (
	  					'name' => 'Photos', 
	  					'singular_name' => 'Photo', 
						'menu_name' => 'Photos', 
						'add_new' => 'Add Photos',
						'add_new_item' => 'Add New Photos',
						'edit' => 'Edit', 
						'edit_item' => 'Edit Photo',
						'new_item' => 'New Photo', 
						'view_item' => 'View Photo', 
						'search_items' => 'Search Photos', 
						'not_found' => 'No Photos Found', 
						'not_found_in_trash' => 'No Photos Found in Trash' 
						),
				)
			);
*/
			/* this ads your post categories to your custom post type */
			/* register_taxonomy_for_object_type('category', 'projects'); */

			/* this ads your post tags to your custom post type 
			register_taxonomy_for_object_type('post_tag', 'projects');*/

} ?>