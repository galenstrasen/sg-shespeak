<?php
/**
 * Register Custom Post Types
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 *
 * @package WordPress
 * @subpackage shespeaks
 * @since 1.0
 */

/**
 * Hook into the init action and call shespeaks_create_post_type when it fires
 */
add_action( 'init', 'shespeaks_create_post_type' );

/**
 * Create a custom post type for projects
 *
 * register_post_type() is located in wp-includes/post.php.
 */
function shespeaks_create_post_type() {

	$labels = array(
		'name'               => 'Work',
		'singular_name'      => 'Work',
		'menu_name'          => 'Work',
		'name_admin_bar'     => 'Work',
		'add_new'            => 'Add New Project',
		'add_new_item'       => 'Add New Project',
		'new_item'           => 'New Project',
		'edit_item'          => 'Edit Project',
		'view_item'          => 'View Project',
		'all_items'          => 'All Work',
		'search_items'       => 'Search Work',
		'parent_item_colon'  => 'Parent Work:',
		'not_found'          => 'No work found.',
		'not_found_in_trash' => 'No work found in Trash.'
	);

	register_post_type( 'work',
		array (
			'labels' => $labels,
			'description' => 'Work',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'has_archive' => true,
			'rewrite' => true,
			'query_var' => true,
			'supports' => array('title','editor','thumbnail','page-attributes'),
			'taxonomies' => array(),
			'menu_icon' => 'dashicons-megaphone',
		)
	);

}
