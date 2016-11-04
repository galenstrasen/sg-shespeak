<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php edit_post_link(); ?>
<div id="page-wrap">	
	
	<div id="post-header-wrap">
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-10 col-xs-9">	
					<h1 class="h2"><?php the_title(); ?></h1>
				</div><!-- /col -->
				<div class="col-md-6 col-sm-2 col-xs-3">
					<a href="/the-book/share-postcards/" class="btn btn-gray btn-sm back-btn">Back</a>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
		
	</div><!-- #post-header-wrap -->
	
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-md-6 col-xs-12">
			
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('x-large', array('class' => 'img-responsive post-feat-img')); }  ?>
				<?php get_template_part('partials/global/share'); ?>
				<?php the_content(); ?>
				
			</div><!-- /col -->
			<div class="col-md-6">
				<div id="postcard-form">
					<?php gravity_form(12, false, false, false, '', true); ?>
				</div><!-- #postcard-form -->
			</div>

			<?php //get_sidebar(); ?>
		
		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php get_template_part('partials/global/slice-select'); ?>
</div><!-- #page-wrap -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
