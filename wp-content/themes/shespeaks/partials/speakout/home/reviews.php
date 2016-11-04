
<?php if(get_field('home_feat_reviews')): $posts = get_field('home_feat_reviews'); if( $posts ): ?>

	<div id="reviews-slider" class="owl-carousel slider-dots dots-gray">
		<?php foreach( $posts as $post): setup_postdata($post); ?>
			
			<div class="item">
			
				<blockquote>
					<p><?php the_field('review_summary'); ?> </p>
					<?php $author = get_field('author_name'); if($author) :?>
						<footer><em><?php echo $author; ?></em></footer>
					<?php endif; ?>
					
				</blockquote>
				<a href="<?php the_permalink();?>" class="btn btn-white btn-xs">Read More</a>
				<?php get_template_part('partials/global/share'); ?>
				
			</div><!-- /item -->
		<?php endforeach; ?>
	
	</div><!-- #reviews-slider -->
						
						
<?php endif; endif; ?>
<?php  wp_reset_query(); ?>