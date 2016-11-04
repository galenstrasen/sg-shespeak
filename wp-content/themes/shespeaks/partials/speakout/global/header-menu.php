<?php if(get_field('display_header_nav')): ?>
	<div id="internal-menu" class="gray-menu-wrapper">
		<?php get_template_part('partials/global/mobile-ham'); ?>
		<?php 
		if ( get_field('header_nav_select') == 'population' )	 {	$menuSelect = 'population-menu'; $containerClass = 'pop-menu-wrap';} 
		elseif ( get_field('header_nav_select') == 'book' ) 	 {	$menuSelect = 'book-menu'; $containerClass = 'book-menu-wrap';} 
		elseif ( get_field('header_nav_select') == 'campaign' ) {	$menuSelect = 'campaign-menu'; $containerClass = 'camp-menu-wrap';} 
		elseif ( get_field('header_nav_select') == 'footer' ) {	$menuSelect = 'footer-menu'; $containerClass = 'footer-menu-wrap';}  
		
		wp_nav_menu( array( 'theme_location' => $menuSelect, 'container_class' => 'gray-menu-wrap ' . $containerClass, 'menu_class' => 'gray-menu') ); 
		?>
		
	</div><!-- #internal-menu -->
<?php endif; ?>
