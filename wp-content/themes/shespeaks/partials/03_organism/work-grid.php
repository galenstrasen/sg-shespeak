<?php
/**
 * Template part for displaying work grid
 *
 * @package WordPress
 * @subpackage shespeaks
 * @since 1.0
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

global $post; ?>

<section class="pg-section section-work js-work-grid">
  <?php // work posts tagged as status: frontpage
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

  $work = new WP_Query( $args );

  if( $work->have_posts() ) : while( $work->have_posts() ) :
    $work->the_post();

    get_template_part('partials/02_molecule/work-card-retro');

    endwhile;
  endif;

  wp_reset_query(); ?>
</section><!-- /section-work -->