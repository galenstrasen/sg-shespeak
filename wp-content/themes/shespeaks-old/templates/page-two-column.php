<?php

/*
Template Name: Two Column
*/

?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php edit_post_link(); ?>
<div id="page-wrap">

	<?php get_template_part('partials/global/header-menu'); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<h1 class="tac"><?php if(get_field('custom_title_text')) { the_field('custom_title_text'); }  else { the_title(); } ?></h1>
				
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php if ( has_post_thumbnail() ) :?> 
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<?php the_post_thumbnail('full-width', array('class' => 'img-responsive')); ?>
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	<?php endif; ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="two-columns">
					<?php the_content(); ?>
				</div><!-- /tac -->
				
				
				
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php get_template_part('partials/global/slice-select'); ?>
	
</div><!-- #page-wrapper -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
