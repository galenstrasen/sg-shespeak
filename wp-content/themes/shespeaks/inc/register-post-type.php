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
		'name'               => 'Projects',
		'singular_name'      => 'Project',
		'menu_name'          => 'Projects',
		'name_admin_bar'     => 'Project',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Project',
		'new_item'           => 'New Project',
		'edit_item'          => 'Edit Project',
		'view_item'          => 'View Project',
		'all_items'          => 'All Projects',
		'search_items'       => 'Search Projects',
		'parent_item_colon'  => 'Parent Projects:',
		'not_found'          => 'No projects found.',
		'not_found_in_trash' => 'No projects found in Trash.'
	);

	register_post_type( 'projects',
		array (
			'labels' => $labels,
			'description' => 'Projects',
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
