	
	<div class="col-md-4 col-sm-6 post-feed news-feed">
		<a href="<?php the_permalink();?>" class="feed-img-wrap">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rect-thumb',array('class' => 'img-responsive')); } ?>
		</a>
		<div class="feed-content">
			<h5 class="feed-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
			
		</div><!-- /feed-content -->
	</div><!-- /col -->
					
					
					

	