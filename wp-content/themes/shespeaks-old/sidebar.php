
<div class="col-lg-3 col-md-4 col-xs-12">
	<div id="post-sidebar">
	
		<!-- BLOG -->
		<div class="row">
			<div class="col-md-12 col-sm-6">
				<div class="widget" id="blog-posts">
					<h4 class="gray widget-header">Recent Posts</h4>
					<?php 
					$args = array('posts_per_page' => '1', 'cat' => '8'); 
					query_posts( $args );
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<a href="<?php the_permalink();?>" class="feed-img-wrap">
						<?php the_post_thumbnail('rect-thumb',array('class' => 'img-responsive')); ?>
					</a>
					<h5 class="feed-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
				
					
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div><!-- #blog-posts -->
			</div><!-- /col -->
		
			<div class="col-md-12 col-sm-6">
				<!-- CAMPAIGN VOICE -->
				<div class="widget" id="cv-posts">
					<h4 class="gray widget-header">Campaign Voice</h4>
					<?php 
					$args = array(
						'posts_per_page' => '1', 
						'cat' => '9', 
						'meta_query' => array(
							array(
								'key' => 'sidebar_featured', 
								'value' => '1', 
								'compare' => '=='
								)
							)
						); 
					query_posts( $args );
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<a href="<?php the_permalink();?>" class="feed-img-wrap">
						<?php the_post_thumbnail('medium',array('class' => 'img-responsive')); ?>
					</a>
					<h5 class="feed-title"><a href="<?php the_permalink();?>"><?php the_title();?>, Name</a></h5>
				
					
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div><!-- #cv-posts -->
			</div><!-- /col -->
		</div><!-- /row -->
		
		<!-- NEWS -->
		<div class="widget" id="news-posts">
			<h4 class="gray widget-header">Latest News</h4>
			<?php 
			$args = array('posts_per_page' => '3', 'cat' => '7'); 
			query_posts( $args );
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<h5 class="feed-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
			<p><em class="gray"><?php the_time('F j, Y') ?> &mdash; </em><?php echo excerpt(20);?><a href="<?php the_permalink();?>" class="red"> ...Read more</a></p>
			
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</div><!-- #news-posts -->

	
	</div><!-- #post-sidebar -->
</div><!-- /col -->