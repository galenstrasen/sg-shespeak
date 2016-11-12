<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
<?php edit_post_link(); ?>
<div id="page-wrap">

	<!-- #HOME SLIDESHOW -->
	<?php if(get_field('home_slideshow')) : ?>
	<!-- BEGIN HOME PAGE CONTENT -->
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				
					<div id="home-slider" class="owl-carousel">
						<?php while(has_sub_field('home_slideshow')) : ?>	
						<div class="item">
							<?php if(get_sub_field('home_slide_translatable')) {?> <div class="notranslate"> <?php } ?>
								<h2 class="h1"><?php the_sub_field('homeslide_header_text');?></h2>
								<p><?php the_sub_field('homeslide_description_text');?></p>
								<a href="<?php the_sub_field('homeslide_button_link');?>" class="btn btn-default btn-black"><?php the_sub_field('homeslide_button_text');?></a>
								<?php $image = get_sub_field('homeslide_image'); ?>
								<img src="<?php echo $image['sizes']['x-large'];?>" alt="<?php the_sub_field('homeslide_header_text');?>"/>
							<?php if(get_sub_field('home_slide_translatable')) {?> </div> <!-- /notranslate --> <?php } ?>
						</div><!-- /item -->
						<?php endwhile; ?>
								
					</div><!-- #home-slider -->

				
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	<?php endif; ?>

	<!-- HOME BUCKETS -->
	<div id="home-buckets">
		<div class="container-fluid no-gutter">
			<div class="row">
				
				<!-- DATA BUCKET -->
				<div class="col-lg-4 col-md-6">
					<div class="home-bucket black-bg bucket-data">
						<?php get_template_part('partials/home/data'); ?>
					</div><!-- /black-bg -->
				</div><!-- /col -->
				
				<!-- REVIEW BUCKET -->
				<div class="col-lg-4 col-md-6">
					<div class="home-bucket dark-gray-bg bucket-reviews">
						<?php get_template_part('partials/home/reviews'); ?>
					</div><!-- /gray-bg -->
				</div><!-- /col -->
				
				<!-- TEASER BUCKET -->
				<div class="col-lg-4 col-md-12">
					<div class="home-bucket black-bg bucket-teasers">
						<?php get_template_part('partials/home/teasers'); ?>
					</div><!-- /black-bg -->
				</div><!-- /col -->
				
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- #home-buckets -->
	
	<?php get_template_part('partials/global/slice-select'); ?>
	
		
</div><!-- #page-wrap -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
