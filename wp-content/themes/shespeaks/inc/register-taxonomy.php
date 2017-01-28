<?php
/**
 * Register Custom Taxonomy
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 *
 * @package WordPress
 * @subpackage shespeaks
 * @since 1.0
 */

/**
 * Hook into the init action and call shespeaks_create_taxonomy when it fires
 */
add_action( 'init', 'shespeaks_create_taxonomy', 0 );

/**
 * Create a custom taxonomy for project statuses
 *
 * register_taxonomy() is located in wp-includes/taxonomy.php.
 */
function shespeaks_create_taxonomy() {

  $labels = array(
    'name' => _x( 'Project Statuses', 'taxonomy general name' ),
    'singular_name' => _x( 'Project Status', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Project Statuses' ),
    'all_items' => __( 'All Project Statuses' ),
    'parent_item' => __( 'Parent Project Status' ),
    'parent_item_colon' => __( 'Parent Project Status:' ),
    'edit_item' => __( 'Edit Project Status' ),
    'update_item' => __( 'Update Project Status' ),
    'add_new_item' => __( 'Add New Project Status' ),
    'new_item_name' => __( 'New Project Status Name' ),
    'menu_name' => __( 'Project Statuses' ),
  );

  register_taxonomy('project-status',array('projects'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'public' => false,
    'show_ui' => true,
    'show_admin_column' => true,
  ));

}