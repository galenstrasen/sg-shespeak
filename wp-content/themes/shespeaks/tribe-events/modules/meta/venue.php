<?php
/**
 * Single Event Meta (Venue) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/venue.php
 *
 * @package TribeEventsCalendar
 */

if ( ! tribe_get_venue_id() ) {
	return;
}
$phone = tribe_get_phone();
$website = tribe_get_venue_website_link();
?>


	<h3 class="gray"> Event Location </h3>
	
	<ul class="event-venue-list">
		<?php do_action( 'tribe_events_single_meta_venue_section_start' ) ?>

		<li class="venue-name"><span class="h4"><?php echo tribe_get_venue() ?> </span></li>

		<?php
		// Do we have an address?
		$address = tribe_address_exists() ? '<li><span class="h4">Address:</span> <address class="tribe-events-address">' . tribe_get_full_address() . '</address></li>' : '';

		// Do we have a Google Map link to display?
		$gmap_link = tribe_show_google_map_link() ? tribe_get_map_link_html() : '';
		$gmap_link = apply_filters( 'tribe_event_meta_venue_address_gmap', $gmap_link );

		// Display if appropriate
		if ( ! empty( $address ) ) {
			echo $address .'<li class="g-map-link">'. $gmap_link . '</li>';
		}
		?>

		<?php if ( ! empty( $phone ) ): ?>
			<li><i class="fa fa-phone fa-fw"></i> <?php echo $phone ?> </li>
		<?php endif ?>

		<?php if ( ! empty( $website ) ): ?>
			<li><i class="fa fa-globe fa-fw"></i> <?php echo $website ?> </li>
		<?php endif ?>

		<?php do_action( 'tribe_events_single_meta_venue_section_end' ) ?>
	</ul>
