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

<section class="pg-section section-woxxrk js-woxxrk-grid" style="margin-top: 300px;">

  <h2 class="special-personi">Selected Work</h2>

  <?php // work posts tagged as status: frontpage
  $args = array(
    'post_type'   => 'work',
    'posts_per_page' => '9',
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

    //vars
    $url = get_field('project_url');
    $context = get_field('project_context');
    $date = get_field('project_date');
    $designer = get_field('project_designer');
    $images = get_field('project_images');
    $logo = get_field('logo');
    $id = $post->ID;
    $lifestyle_img = get_field('lifestyle_image');
    $link = '/wp-admin/admin-ajax.php?action=get_user_snippet&work_id='.$id;
    $skills = wp_get_post_terms($post->ID,'skill',array("fields" => "all"));
    $image_obj = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
    $image = $image_obj['0'];

    ?>


    <div class="work-card">
      <div class="container-fluid stop1440">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <h4 class="highlight project-title text-center"><span><?php the_title(); ?></span></h4>
            <div class="media-wrapper">
              <div class="row">
                <div class="col-xs-5">
                  <a href="#" class="scroller-wrap">
                    <img src="<?php echo $image; ?>" alt="Galen Strasen" class="img">
                  </a>
                </div><!-- /col -->
                <div class="col-xs-7">
                  <div class="lifestyle-img"><img src="<?php echo $lifestyle_img['sizes']['large']; ?>" alt="" class="img"><a href="" class="btn btn-white">Check it out</a></div>
                  <div class="project-info">
                    <h3><em><?php the_title(); ?> Web Project</em></h3>
                    <ul class="plus">
                      <?php if(isset($date)) { echo '<li>DOB: '. $date .'</li>'; } ?>
                      <?php if(isset($context)) { echo '<li>Context: '. $context .'</li>'; } ?>
                      <?php if(isset($designer)) { echo '<li>Designer: '. $designer .'</li>'; } ?>
                      <?php if($skills) {
                        echo '<li>Skills: ';
                        foreach($skills as $skill) {
                          echo '<span class="skill">'. $skill->name.'</span> ';
                        }
                        echo '</li>';
                      }
                      ?>
                    </ul>

                  </div><!-- /project-info -->
                </div><!-- /col -->
              </div><!-- /row -->
</div>
          </div><!-- /col -->
        </div><!-- /row -->
      </div><!-- /container-fluid -->




</div>

        <?php
 endwhile;
  endif;

  wp_reset_query(); ?>
</section><!-- /section-work -->