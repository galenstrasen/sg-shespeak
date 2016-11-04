
<?php if(get_field('home_feat_data')): $posts = get_field('home_feat_data'); if( $posts ): ?>

	<div id="data-slider" class="owl-carousel slider-dots dots-gray">
		<?php foreach( $posts as $post): setup_postdata($post); ?>
		
		<div class="item">
			<h2 class="h4 tac">
				<?php 
				if(get_field('custom_data_title')){ the_field('custom_data_title'); } 
				else { the_title(); } ?>
			</h2>
			<p class="tac data-description">
				<?php 
				if(get_field('custom_data_text')){ the_field('custom_data_text'); } 
				else { echo excerpt(15); } ?>
				
			</p>
			<p class="tac"><a href="<?php the_permalink(); ?>" class="btn btn-white btn-xs">Learn More</a></p>
			
			
			<?php
			$GLOBALS['chartCSV'] = get_field('data_csv_upload');
			if($GLOBALS['chartCSV']) :
				$GLOBALS['chartID'] = $post->post_name;
				$GLOBALS['yaxis'] = get_field('yaxis_text');
				$GLOBALS['tooltip'] = get_field('tooltip_suffix');
				
				get_template_part('partials/data/line-chart-home');
				?>
				
				<div id="<?php echo $post->post_name; ?>" class="home-data"></div>
					
				<p class="data-source">
				<?php if(get_field('data_chart_source')) {
					echo 'Source: ';
					the_field('data_chart_source');
					}
					?>
				
				</p>
				
				
				<?php get_template_part('partials/global/share'); ?>
				
			<?php endif; ?>
				
		</div><!-- /item -->
		
		<?php endforeach; ?>
						
	</div><!-- #data-slider -->
						
						
<?php endif; endif; ?>
<?php  wp_reset_query(); ?>



