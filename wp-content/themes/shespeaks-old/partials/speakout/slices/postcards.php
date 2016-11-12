<div id="share-postcards" class="slice slider-slice fixed-text">

	<?php if(get_field('pc_slideshow','option')) : ?>
		<div id="postcard-slider" class="owl-carousel slider-dots dots-white">
		<?php while(has_sub_field('pc_slideshow','option')) : ?>	
		
			<?php $image = get_sub_field('pc_slider_image','option'); ?>
			<div class="item" style="background-image: url('<?php echo $image['sizes']['full-width'];?>')"></div>
		<?php endwhile; ?>
		</div><!-- #social-slider -->
	<?php endif; ?>
	
	<div class="caption absolute tac">
		<a href="" class="btn btn-white">Share Postcards</a>
	</div><!-- /caption -->
	
</div><!-- #share-postcards -->
