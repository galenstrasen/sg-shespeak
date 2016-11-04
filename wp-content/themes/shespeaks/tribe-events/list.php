<?php
/**
 * List View Template
 * The wrapper template for a list of events. This includes the Past Events and Upcoming Events views
 * as well as those same views filtered to a specific category.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

	<div id="internal-menu" class="gray-menu-wrapper">
		<?php get_template_part('partials/global/mobile-ham'); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'gray-menu-wrap footer-menu-wrap','menu_class' => 'gray-menu') ); ?>
	</div><!-- #internal-menu -->

	<?php do_action( 'tribe_events_before_template' ); ?>

	<!-- Tribe Bar :: Hidden for now -->
	<?php //tribe_get_template_part( 'modules/bar' ); ?>

	<!-- Main Events Content -->
	<?php tribe_get_template_part( 'list/content' ); ?>

	<div class="tribe-clear"></div>

	<?php do_action( 'tribe_events_after_template' ) ?>