	
	<div class="col-md-4 col-sm-6 post-feed news-feed">
		<a href="<?php the_permalink();?>" class="feed-img-wrap">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rect-thumb',array('class' => 'img-responsive')); } ?>
		</a>
		<div class="feed-content">
			<h5 class="feed-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
			<p>
				
				
				<?php echo excerpt(45);?><a href="<?php the_permalink();?>" class="red"> ...Read more</a>
			</p>
			<?php $author = get_field('author_name'); $author_prof = get_field('author_profession'); if($author) :?>
			<p class="gray"><em class="uppercase">&mdash; <?php echo $author; ?></em><?php if($author_prof){ echo ',&nbsp;&nbsp;'.$author_prof; }?></p>
			<?php endif; ?>
		</div><!-- /feed-content -->
	</div><!-- /col -->
					
					
					

	