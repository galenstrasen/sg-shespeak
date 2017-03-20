<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage shespeaks
 * @since 1.0
 * @version 1.0
 */

get_header();

  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>


    <?php
    // 1. INTRO AREA
    get_template_part( 'partials-final/home-intro-alt' );

    // get_template_part( 'partials-final/home-intro' );
    ?>



<main class="page-main">
      <?php
      // home about
      //get_template_part( 'partials/03_organism/new-guy' );
      //get_template_part( 'partials/03_organism/home-about' );

      //get_template_part( 'partials/03_organism/work-checklist' );

      get_template_part( 'partials/03_organism/work-grid-final' );
//get_template_part( 'partials/03_organism/work-static' );
      // work grid
     //get_template_part( 'partials/03_organism/work-grid-static' ); ?>

      <!-- <h4 class="logo">+<<</h4> -->

    </main>



    <?php endwhile;
  endif;

  edit_post_link();

get_footer();
