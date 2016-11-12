<div id="post-header-wrap">
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-10 col-xs-9">	
					
					<h1 class="h2"><?php the_title(); ?></h1>
					
				</div><!-- /col -->
				<div class="col-md-4 col-sm-2 col-xs-3">
					<?php 
					if(in_category(7)){ $backlink = '/news/'; } // News
					elseif(in_category(8)){ $backlink = '/blog/'; } // Blog
					elseif(in_category(9)){ $backlink = '/the-campaign/campaign-voices/'; } // Voices
					elseif(in_category(10)){ $backlink = '/photos-stories/'; } // Photos & Stories
					elseif(in_category(14)){ $backlink = '/the-book/share-postcards/'; } // Postcards
					elseif(in_category(11)){ $backlink = '/the-book/reviews/'; } // Reviews
					elseif(in_category(17)){ $backlink = '/the-campaign/'; } // Book Champions
					else { $backlink = '/'; }
					?>
		
					<a href="<?php echo $backlink; ?>" class="btn btn-gray btn-sm back-btn">Back</a>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
		
		
		
	</div><!-- #post-header-wrap -->