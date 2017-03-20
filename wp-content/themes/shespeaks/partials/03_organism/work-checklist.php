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

<section class="pg-section section-work js-work-grid" style="margin-top: 300px;">
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
echo '<div class="container-fluid">';
  if( $work->have_posts() ) : while( $work->have_posts() ) :
    $work->the_post(); ?>

  <div class="row">

  <?php

//vars
$url = get_field('project_url');
$context = get_field('project_context');
$date = get_field('project_date');
$designer = get_field('project_designer');
$images = get_field('project_images');
$logo = get_field('logo');
$id = $post->ID;
$link = '/wp-admin/admin-ajax.php?action=get_user_snippet&work_id='.$id;
  $skills = wp_get_post_terms($post->ID,'skill',array("fields" => "all"));
  //$count_trip_types = count($skills);



        //$image_obj = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
        $image_obj = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'lg_thumb');
        $image = $image_obj['0'];
        // if(has_term('archived','project-types'))
        // {
        //   $class = 'archived';
        // }
        // else
        // {
        //   $class = 'featured';
        // }
        ?>

<div class="col-xs-4">
  <img src="<?php echo $image; ?>" alt="" class="img-responsive" />
</div>
<div class="col-xs-8">
  <h2><?php the_title(); ?></h2>

<?php
if(get_field('fancy_title')) {
  echo '<div class="row">';
    echo '<div class="col-lg-2">';
      echo '<p class="text-right"><strong>Fancy Title: </strong></p>';
    echo '</div>';
    echo '<div class="col-lg-10"><p> ';
      while(has_sub_field('fancy_title')) {
        echo get_sub_field('line').'<br/>';
      }
    echo '</p></div>';
  echo '</div>';
}


if($logo) {
  echo '<div class="row">';
    echo '<div class="col-lg-2">';
      echo '<p class="text-right"><strong>Logo: </strong></p>';
    echo '</div>';
    echo '<div class="col-lg-10">'; ?>
      <img src="<?php echo $logo['sizes']['thumbnail']; ?>" alt="<?php echo $logo['title']; ?>" class="img-responsive" />
    <?php echo '</div>';
  echo '</div>';
}
?>


<p><?php echo $url .' / '. $context['label'] .' / '. $date .' / '. $designer; ?></p>
            <p><?php if($skills) {
  foreach($skills as $skill) {echo $skill->name.' ';}

} ?></p>
<?php echo $link; ?>
<?php debug($context); ?>
<?php the_content(); ?>



</div></div><!-- /row -->

        <?php
 endwhile;
  endif;
echo '</div>';
  wp_reset_query(); ?>
</section><!-- /section-work -->