<?php

// Registers Menus
// http://codex.wordpress.org/Function_Reference/register_nav_menus

function register_my_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' ), 
			'population-menu' => __( 'Population Menu' ), 
			'book-menu' => __( 'Book Menu' ), 
			'campaign-menu' => __( 'Campaign Menu' ), 
			'footer-menu' => __( 'Footer Menu' )
		)
	);
	}
		
add_action( 'init', 'register_my_menus' );
?>
