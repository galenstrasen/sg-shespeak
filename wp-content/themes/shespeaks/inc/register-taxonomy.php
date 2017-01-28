<?php
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_taxonomy() {

//Project Types Taxonomy
  $labels = array(
    'name' => _x( 'Project Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Project Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Project Types' ),
    'all_items' => __( 'All Project Types' ),
    'parent_item' => __( 'Parent Project Type' ),
    'parent_item_colon' => __( 'Parent Project Type:' ),
    'edit_item' => __( 'Edit Project Type' ),
    'update_item' => __( 'Update Project Type' ),
    'add_new_item' => __( 'Add New Project Type' ),
    'new_item_name' => __( 'New Project Type Name' ),
    'menu_name' => __( 'Project Types' ),
  );

// Now register the taxonomy
  register_taxonomy('project-type',array('post','page','projects','pmcmedia'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'public' => false,
    'show_ui' => true,
    'show_admin_column' => true,
  ));

}
?>