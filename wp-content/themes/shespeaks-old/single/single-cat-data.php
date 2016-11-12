<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php edit_post_link(); ?>
<div id="page-wrap">	
	
	<?php get_template_part('partials/post/header'); ?>
	
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-lg-7 col-lg-offset-1 col-md-8 col-xs-12">
			
				
				<?php the_content(); ?>
				<div class="data-block">
				<?php
					$GLOBALS['chartCSV'] = get_field('data_csv_upload');
					if($GLOBALS['chartCSV']) :
					$GLOBALS['chartID'] = 'data-chart';
					$GLOBALS['yaxis'] = get_field('yaxis_text');
					$GLOBALS['tooltip'] = get_field('tooltip_suffix');
					?>
					<?php get_template_part('partials/data/line-chart');?>
					<h3 class="tac"><?php the_field('data_chart_title');?></h3>
					
					<div id="data-chart"></div>
					<p class="gray tac">(Source: <?php the_field('data_chart_source');?>)</p>
					
				<?php endif; ?>
				</div>
				<?php get_template_part('partials/global/share'); ?>
				
				
			</div><!-- /col -->

			<?php get_sidebar(); ?>
		
		</div><!-- /row -->
	</div><!-- /container -->
	
</div><!-- #page-wrap -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
