	
<div id="solutions-content" class="slice slider-slice fixed-text">
	<?php if(get_field('sl_slideshow','option')) : ?>
		<div id="solutions-slider" class="owl-carousel slider-dots dots-white">
			<?php while(has_sub_field('sl_slideshow','option')) : ?>
			<?php $image = get_sub_field('sl_slider_image','option'); ?>
			<div class="item" style="background-image: url('<?php echo $image['sizes']['full-width'];?>')"></div>
			<?php endwhile; ?>
		</div><!-- #solutions-slider -->
	<?php endif; ?>
	
	<div class="caption absolute tac">
		<h3 class="h1"><?php the_field('sl_header_text','option'); ?></h3>
		<p><?php the_field('sl_sub_text','option'); ?></p>
		<a href="<?php the_field('sl_button_link','option'); ?>" class="btn btn-white"><?php the_field('sl_button_text','option'); ?></a>

	</div><!-- /caption -->
</div><!-- #social-content -->
