<?php
// Template Name: Flex Cheat Sheet

get_header();
  while ( have_posts() ) : the_post();


  // Hero
  // get_template_part( 'partials/03_organism/_intro-full' );


  // Nav
  // get_template_part( 'partials/03_organism/navbar' );
  ?>



  <main class="page-main" id="flex-box" role="main">

<?php get_template_part( 'partials/flexbox' ); ?>

  </main>
  <!-- #page-main -->



<?php
  endwhile;
edit_post_link();
get_footer();
