<div id="footer">
	
	<?php
	$sevenb = 7000000000;
	$Bday	= 1320033600;

	if(time() < $Bday) {
		$world_population = (7000000000 - (($Bday - time()) * 2.42));
		} 
	else {
		$world_population = (7000000000 + (time() - $Bday) * 2.42);
		}
	?>
	<div id="pop-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-12 tac">
					<h4 class="gray">This is the Current World Population</h4>
					<p class="h1 gray" id="worldpopulation" data-worldpop="<?php echo esc_attr( $world_population ); ?>"><?php echo number_format( $world_population ); ?></p>
					<h4 class="black">Net Growth Since You've been on this site</h4>
					<p class="h1 black" id="netgrowth">12,783</p>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- #pop-counter -->
	
	<div id="footer-menu" class="gray-menu-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<?php get_template_part('partials/global/mobile-ham'); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'gray-menu-wrap footer-menu-wrap','menu_class' => 'gray-menu') ); ?>
				</div><!-- /col -->	
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- #footer-menu -->


	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<a href="/" class="logo"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/pso-gray.png" class="img-responsive" alt="Population Speak Out" /></a>	
				<div class="footer-text">
					<?php the_field('footer_text', 'option');?>
				</div><!-- /footer-text -->
				<p class="privacy">We respect your <a href="">privacy</a> and will not share your information with any other groups.</p>
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	
</div><!-- #footer -->

<?php get_template_part('partials/global/cta-overlay'); ?>

<?php wp_footer(); ?>




</body>
</html>