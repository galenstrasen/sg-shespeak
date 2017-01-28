<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

global $post;

    $args = array(
      'post_type'   => 'work',
      'posts_per_page' => '4',
      'order' => 'ASC',
      'orderby' => 'date',
      array(
            'taxonomy' => 'status',
            'field' => 'slug',
            'terms' => 'frontpage',
          ),
    );

    $projects = new WP_Query( $args );

    if( $projects->have_posts() ) :
      while( $projects->have_posts() ) :
        $projects->the_post();

        get_template_part('partials/02_molecule/project-card');

      endwhile;
    endif;

    wp_reset_query();
    ?>