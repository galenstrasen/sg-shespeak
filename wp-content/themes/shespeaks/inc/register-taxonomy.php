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
 * Hook into the init action and call shespeaks_create_taxonomies when it fires
 */
add_action( 'init', 'shespeaks_create_taxonomies', 0 );

/**
 * Create a custom taxonomy for Components
 *
 * register_taxonomy() is located in wp-includes/taxonomy.php.
 */
function shespeaks_create_taxonomies() {

  $labels = array(
    'name' => _x( 'Status', 'taxonomy general name' ),
    'singular_name' => _x( 'Status', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Statuses' ),
    'all_items' => __( 'All Statuses' ),
    'parent_item' => __( 'Parent Status' ),
    'parent_item_colon' => __( 'Parent Status:' ),
    'edit_item' => __( 'Edit Status' ),
    'update_item' => __( 'Update Status' ),
    'add_new_item' => __( 'Add New Status' ),
    'new_item_name' => __( 'New Status Name' ),
    'menu_name' => __( 'Status' ),
  );

  register_taxonomy('status',array('work'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'public' => false,
    'show_ui' => true,
    'show_admin_column' => true,
  ));


  $labels = array(
    'name' => _x( 'Skills', 'taxonomy general name' ),
    'singular_name' => _x( 'Skill', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Skills' ),
    'all_items' => __( 'All Skills' ),
    'parent_item' => __( 'Parent Skill' ),
    'parent_item_colon' => __( 'Parent Skill:' ),
    'edit_item' => __( 'Edit Skill' ),
    'update_item' => __( 'Update Skill' ),
    'add_new_item' => __( 'Add New Skill' ),
    'new_item_name' => __( 'New Skill Name' ),
    'menu_name' => __( 'Skills' ),
  );

  register_taxonomy('skill',array('work'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'public' => false,
    'show_ui' => true,
    'show_admin_column' => true,
  ));

}