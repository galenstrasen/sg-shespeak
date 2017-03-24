
<?php
$role = get_field('tm_role');
$location = get_field('tm_location');
$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
$url = $image['0'];
//echo $post->ID;
?>



<div class="modal-wrapper">
  <div class="container-fluid stop1170">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-xs-12">
        <?php echo $post->ID; the_title(); ?>
      </div><!-- /col -->
    </div><!-- /row -->
  </div><!-- /container -->
</div>
