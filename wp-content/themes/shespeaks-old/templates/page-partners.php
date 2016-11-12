<?php

/*
Template Name: Partners Page
*/

?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php edit_post_link(); ?>
<div id="page-wrap">

	<?php get_template_part('partials/global/header-menu'); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="tac archive-page-content">
					<h1 class="h2"><?php if(get_field('custom_title_text')) { the_field('custom_title_text'); }  else { the_title(); } ?></h1>
					<?php the_content(); ?>
				</div><!-- /tac -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php if(get_field('partners')) : ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
				<?php while(has_sub_field('partners')) : ?>	
					<div class="col-md-4 col-sm-6 post-feed partners-feed">
						<h5 class="feed-title"><?php the_sub_field('partner_name');?></h5>
						<span class="feed-img-wrap">
						<?php $image = get_sub_field('partner_logo'); ?>
							<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="" />
						</span>
						<div class="feed-content">
				
							<p><?php the_sub_field('partner_description');?></p>
							<a href="<?php the_sub_field('partner_website'); ?>" target="_blank" class="btn btn-black btn-xs">Find Out More</a>
						</div><!-- /feed-content -->
					</div><!-- /col -->
				<?php endwhile; ?>
				</div><!-- /row -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php endif; ?>		
			
			
</div><!-- #page-wrapper -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
