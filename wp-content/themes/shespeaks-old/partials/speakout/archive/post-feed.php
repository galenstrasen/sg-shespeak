	
	<div class="col-sm-4 post-feed news-feed">
		<div class="feed-content">
			<h5 class="feed-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
			<p>
				<?php $date = get_field('public_date'); if($date) :?>
					<em class="gray"><?php the_field('public_date') ?> &mdash; </em>
				<?php endif; ?>
				
				<?php echo excerpt(45);?><a href="<?php the_permalink();?>" class="red"> ...Read more</a>
			</p>
		</div><!-- /feed-content -->
	</div><!-- /col -->
					
					
					

	