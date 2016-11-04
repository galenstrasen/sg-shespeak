	
	<div class="col-lg-4 col-md-6 post-feed reviews-feed">
		
		
		<div class="feed-content">
			<blockquote>
				<h5 class="feed-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
				<p><?php the_field('review_summary'); ?> <a href="<?php the_permalink();?>" class="red">Read more...</a></p>
				<?php $author = get_field('author_name'); if($author) :?>
				<footer><em class="uppercase"><?php echo $author; ?></em></footer>
				<?php endif; ?>
			</blockquote>
			
		</div><!-- /feed-content -->
	</div><!-- /col -->
					
					
					

	