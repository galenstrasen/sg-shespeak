<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php edit_post_link(); ?>
<div id="page-wrap">	
	
	<?php get_template_part('partials/post/header'); ?>
		
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-lg-7 col-lg-offset-1 col-md-8 col-xs-12">
				<div class="champion-info">
					<p><span class="h4">City:</span> <?php the_field('champion_city'); ?></p>
					<p><span class="h4">Country:</span> <?php the_field('champion_country'); ?></p>
					<?php if(get_field('organization_website')) { ?>
					<p><span class="h4">Website:</span> <a href="<?php the_field('organization_website'); ?>" target="_blank"><?php the_field('organization_website'); ?></a></p>
					<?php } ?>
				</div><!-- /champion-info -->
				
				
				<h2>Impact Narrative</h2>
				<?php the_content(); ?>
				
				<?php if(get_field('impact_photos')) : ?>
					<div class="impact-photos">
					<h2>Impact Photos</h2>
					
					<?php while(has_sub_field('impact_photos')) : ?>	
						<?php $image = get_sub_field('impact_photo'); ?>
						<a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>"/></a>
					<?php endwhile; ?>
					</div>
				<?php endif; ?>
				
				<?php if(get_field('impact_videos')) : ?>
					<div class="impact-videos">
					<h2>Impact Videos</h2>
					
					<?php while(has_sub_field('impact_videos')) : ?>	
					<?php
		$vidURL = get_sub_field('impact_video_url');

		if(strpos($vidURL, 'youtube') !== false){

			$parsedVidURL = parse_url($vidURL);
		
			$vidPART = $parsedVidURL['query'];

			$vidPART = str_replace('v=','',$vidPART);

			$vidImgURL = 'http://img.youtube.com/vi/' . $vidPART . '/0.jpg';

			$smUrl = $vidImgURL;
			
			$vidType = 'video-youtube';

		} elseif(strpos($vidURL, 'vimeo') !== false) {

			$parsedVidURL = parse_url($vidURL);

			$vidPART = $parsedVidURL['path'];

			$vidPART = str_replace('/','',$vidPART);

			$hash = simplexml_load_file("http://vimeo.com/api/v2/video/$vidPART.xml");

			$smUrl =  $hash->video[0]->thumbnail_large; 
			
			$vidType = 'video-vimeo';

		}

		echo '<a href="' . $vidURL . '" class="impact-video ' . $vidType . '"><img src="' . $smUrl . '" class="img-responsive" width="200" alt=""/></a>';
		
		?>	
					<?php endwhile; ?>
					</div>
				<?php endif; ?>
				
				<?php get_template_part('partials/global/share'); ?>
						
			</div><!-- /col -->

			<?php get_sidebar(); ?>
		
		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php get_template_part('partials/global/slice-select'); ?>
</div><!-- #page-wrap -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
