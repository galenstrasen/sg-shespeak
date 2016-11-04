<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php

// Setup an array of venue details for use later in the template
$venue_details = array();

if ( $venue_name = tribe_get_meta( 'tribe_event_venue_name' ) ) {
	$venue_details[] = $venue_name;
}

if ( $venue_address = tribe_get_meta( 'tribe_event_venue_address' ) ) {
	$venue_details[] = $venue_address;
}
// Venue microformats
$has_venue_address = ( $venue_address ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>

<div class="row">
	<div class="col-sm-2">
		<?php //if ( tribe_event_is_multiday()) {  ?> <? //} ?>
		<div class="date-coin">
			<span class="d-month"><?php echo tribe_get_start_date($event = null, $displayTime = false, $dateFormat ='M'); ?></span>
			<span class="d-day"><?php echo tribe_get_start_date($event = null, $displayTime = false, $dateFormat ='j'); ?></span>
		</div><!-- /date-coin -->
	</div><!-- /col -->
	
	<div class="col-sm-10">
		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ) ?>
		<h3 class="tribe-events-list-event-title entry-title summary">
			<a class="url black" href="<?php echo tribe_get_event_link() ?>" title="<?php the_title() ?>" rel="bookmark">
				<?php the_title() ?>
			</a>
		</h3>
		<?php do_action( 'tribe_events_after_the_event_title' ) ?>
		
		<!-- Event Meta -->
		<?php do_action( 'tribe_events_before_the_meta' ) ?>
		
		<?php do_action( 'tribe_events_after_the_meta' ) ?>
		
		<!-- Event Image -->
		<?php // echo tribe_event_featured_image( null, 'medium' ) ?>
		
		<!-- Event Content -->
		<?php do_action( 'tribe_events_before_the_content' ) ?>
		<div class="tribe-events-list-event-description tribe-events-content description entry-summary">
			<p class="date-time"><em class="gray"><?php echo tribe_events_event_schedule_details() ?></em></p>
			<p><?php echo excerpt(45) ?> <a href="<?php echo tribe_get_event_link() ?>" class="red" rel="bookmark"><?php _e( 'Read more', 'tribe-events-calendar' ) ?>...</a></p>
			
			
		</div><!-- .tribe-events-list-event-description -->
		<?php do_action( 'tribe_events_after_the_content' ) ?>
	</div><!-- /col -->
</div><!-- /row -->
<hr />