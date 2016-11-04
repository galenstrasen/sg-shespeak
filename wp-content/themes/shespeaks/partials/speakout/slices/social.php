
<div id="social-content" class="slice slider-slice fixed-text">
	<?php if(get_field('sh_slideshow','option')) : ?>
		<div id="social-slider" class="owl-carousel slider-dots dots-white">
			<?php while(has_sub_field('sh_slideshow','option')) : ?>
			<?php $image = get_sub_field('sh_slider_image','option'); ?>
			<div class="item" style="background-image: url('<?php echo $image['sizes']['full-width'];?>')"></div>
			<?php endwhile; ?>
		</div><!-- #social-slider -->
	<?php endif; ?>
	
	<div class="caption absolute tac">
		<h3 class="h1"><?php the_field('sh_header_text','option'); ?></h3>
		<p><?php the_field('sh_sub_text','option'); ?></p>
		<div class="social">
			<a href="#" class="btn-icon btn-icon-lg btn-black" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="#" class="btn-icon btn-icon-lg btn-black" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="#" class="btn-icon btn-icon-lg btn-black" target="_blank"><i class="fa fa-pinterest"></i></a>
		</div>
	</div><!-- /caption -->
</div><!-- #social-content -->
