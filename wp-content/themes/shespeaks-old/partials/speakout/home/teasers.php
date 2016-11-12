<?php if (get_field('home_teasers')) :?>
					<div id="teaser-slider" class="owl-carousel slider-dots dots-gray">
					<?php while(has_sub_field('home_teasers')) : ?>	
						<div class="item">
							<h4><?php the_sub_field('home_teaser_header');?></h4>
							<?php the_sub_field('home_teaser_content');?>
							<a href="<?php the_sub_field('home_teaser_button_link');?>" class="btn btn-xs btn-white"><?php the_sub_field('home_teaser_button_text');?></a>
							<?php get_template_part('partials/global/share'); ?>
						</div>
					<?php endwhile; ?>
					</div><!-- #teaser-slider -->
					<?php endif; ?>
