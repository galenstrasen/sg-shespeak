<?php get_header(); ?>

<div id="page-wrap">
	<div class="container-fluid page-content">
		<div class="row">


			<div class="col-sm-8">
				<h1>Recent News from Population Media Center</h1>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'partials/single-loop'); ?>
					<?php comments_template(); ?>
				<?php endwhile; endif; ?>
				<?php edit_post_link(); ?>
				<?php get_template_part('partials/loop-nav'); ?>
			</div><!-- /col -->
			<?php get_sidebar(); ?>

		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>


