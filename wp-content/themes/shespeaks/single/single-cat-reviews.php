<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php edit_post_link(); ?>
<div id="page-wrap">	
	
	<?php get_template_part('partials/post/header'); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-7 col-lg-offset-1 col-md-8 col-xs-12">

				<div class="review-content">
					<?php the_content(); ?>
				</div><!-- /review-content -->
				
				<?php get_template_part('partials/post/author'); ?>
				<?php get_template_part('partials/global/share'); ?>
				
			</div><!-- /col -->

			<?php get_sidebar(); ?>
		
		</div><!-- /row -->
	</div><!-- /container -->
	<?php get_template_part('partials/global/slice-select'); ?>
</div><!-- #page-wrap -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
