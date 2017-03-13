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


    <?php // home intro
    get_template_part( 'partials/03_organism/home-hero' ); ?>


    <nav class="home-nav">
      <?php // home nav
      get_template_part( 'partials/03_organism/navbar' ); ?>
    </nav>


    <main class="page-main">

      <?php
      // home about
      get_template_part( 'partials/03_organism/home-about' );

      // work grid
      get_template_part( 'partials/03_organism/work-grid' ); ?>

      <!-- <h4 class="logo">+<<</h4> -->

    </main>



    <?php endwhile;
  endif;

  edit_post_link();

get_footer();
