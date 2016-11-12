<?php if(get_field('featured_reviews','option')): $posts = get_field('featured_reviews','option'); if( $posts ): ?>
	<div id="featured-reviews" class="slice">
		<div class="container-fluid">
			<div class="row">
				<?php foreach( $posts as $post): setup_postdata($post); ?>
				<div class="col-md-4">
					<div class="review-wrap">
						<blockquote>
							<p><?php the_field('review_summary'); ?></p>
							<?php $author = get_field('author_name'); if($author) :?>
							<footer><em><?php echo $author; ?></em></footer>
							<?php endif; ?>
						</blockquote>
						<?php get_template_part('partials/global/share'); ?>
					</div><!-- /review-wrap -->
				</div><!-- /col -->
				<?php endforeach; ?>
			</div><!-- /row -->
			<div class="row">
				<div class="col-sm-12 tac">
					<a href="/the-book/reviews/" class="btn btn-white">See What Others are Saying</a>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- #featured-reviews -->
						
						
<?php endif; endif; ?>
<?php  wp_reset_query(); ?>