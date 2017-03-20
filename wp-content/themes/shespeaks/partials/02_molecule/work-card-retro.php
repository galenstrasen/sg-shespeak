<?php
/**
 * Template part for displaying work card
 *
 * @package WordPress
 * @subpackage shespeaks
 * @since 1.0
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

global $post;

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
        $image_obj = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full_size');
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
<div class="dotty">
<a href="" class="thingy-1">
 <img src="<?php echo $image; ?>" alt="Galen Strasen" class="img" />
</a>
<div class="logo-wrap">
<h2 class="client-name">
<?php if(get_field('fancy_title')) {
  while(has_sub_field('fancy_title')) {
    echo '<span>'.get_sub_field('line').'</span>';
}}
else {
  the_title();
} ?>
</h2>
</div>
<!-- have a plus button & this content hidden & until clicked by user - in content have link to view gallery of screenshots.
<div class="container-content">
<img src="<?php echo $logo['sizes']['medium']; ?>" alt="Galen Strasen" class="" />

<p><?php echo $url .' / '. $context['label'] .' / '. $date .' / '. $designer; ?></p>
            <p><?php if($skills) {
  foreach($skills as $skill) {echo $skill->name.' ';}

} ?></p>
<?php the_content(); ?>
</div>
</div>

        <div class="project-card hidden" style="background-image: url('');">
          <a href="<?php echo $link; ?>" class="js-work-trigger link" >

            <img src="<?php echo $image; ?>" class="alignleft" alt="" />
            <h3 class="title"><span><?php the_title(); ?></span></h3>
            <p><?php echo $url .' / '. $context['label'] .' / '. $date .' / '. $designer; ?></p>
            <p><?php if($skills) {
  foreach($skills as $skill) {echo $skill->name.' ';}

} ?></p>
            <p><?php debug($context); //debug($skills); ?></p>
            <?php the_content(); ?>
          </a>
        </div><!-- /project-card -->
