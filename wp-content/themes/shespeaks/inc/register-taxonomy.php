<?php
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_pmc_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_pmc_taxonomy() {

//Locations Taxonomy
  $labels = array(
    'name' => _x( 'Locations', 'taxonomy general name' ),
    'singular_name' => _x( 'Location', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Locations' ),
    'all_items' => __( 'All Locations' ),
    'parent_item' => __( 'Parent Location' ),
    'parent_item_colon' => __( 'Parent Location:' ),
    'edit_item' => __( 'Edit Location' ),
    'update_item' => __( 'Update Location' ),
    'add_new_item' => __( 'Add New Location' ),
    'new_item_name' => __( 'New Location Name' ),
    'menu_name' => __( 'Locations' ),
  );

// Now register the taxonomy
  register_taxonomy('locations',array('post','page','projects','pmcmedia'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'location' ),
  ));

//Issues Taxonomy
  $labels = array(
    'name' => _x( 'Issues', 'taxonomy general name' ),
    'singular_name' => _x( 'Issue', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Issues' ),
    'all_items' => __( 'All Issues' ),
    'parent_item' => __( 'Parent Issue' ),
    'parent_item_colon' => __( 'Parent Issue:' ),
    'edit_item' => __( 'Edit Issue' ),
    'update_item' => __( 'Update Issue' ),
    'add_new_item' => __( 'Add New Issue' ),
    'new_item_name' => __( 'New Issue Name' ),
    'menu_name' => __( 'Issues' ),
  );

// Now register the taxonomy
  register_taxonomy('issues',array('post','page','projects','pmcmedia'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'issue' ),
  ));


//Methods Taxonomy
  $labels = array(
    'name' => _x( 'Methods', 'taxonomy general name' ),
    'singular_name' => _x( 'Method', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Methods' ),
    'all_items' => __( 'All Methods' ),
    'parent_item' => __( 'Parent Method' ),
    'parent_item_colon' => __( 'Parent Method:' ),
    'edit_item' => __( 'Edit Method' ),
    'update_item' => __( 'Update Method' ),
    'add_new_item' => __( 'Add New Method' ),
    'new_item_name' => __( 'New Method Name' ),
    'menu_name' => __( 'Methods' ),
  );

// Now register the taxonomy
  register_taxonomy('methods',array('post','page','projects','pmcmedia'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'method' ),
  ));

//Funders Taxonomy
  $labels = array(
    'name' => _x( 'Funders', 'taxonomy general name' ),
    'singular_name' => _x( 'Funder', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Funders' ),
    'all_items' => __( 'All Funders' ),
    'parent_item' => __( 'Parent Funder' ),
    'parent_item_colon' => __( 'Parent Funder:' ),
    'edit_item' => __( 'Edit Funders' ),
    'update_item' => __( 'Update Funder' ),
    'add_new_item' => __( 'Add New Funders' ),
    'new_item_name' => __( 'New Funder Name' ),
    'menu_name' => __( 'Funders' ),
  );

// Now register the taxonomy
  register_taxonomy('funders',array('post','page','projects','pmcmedia'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'funders' ),
  ));


}
?>