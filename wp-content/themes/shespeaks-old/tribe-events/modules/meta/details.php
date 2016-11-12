<?php
/**
 * Single Event Meta (Details) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/details.php
 *
 * @package TribeEventsCalendar
 */
?>


	<h2>Event Details</h2>
	<ul class="event-detail-list">

		<?php
		do_action( 'tribe_events_single_meta_details_section_start' );

		$time_format = get_option( 'time_format', TribeDateUtils::TIMEFORMAT );
		$time_range_separator = tribe_get_option( 'timeRangeSeparator', ' - ' );

		$start_datetime = tribe_get_start_date();
		$start_date = tribe_get_start_date( null, false );
		$start_time = tribe_get_start_date( null, false, $time_format );
		$start_ts = tribe_get_start_date( null, false, TribeDateUtils::DBDATEFORMAT );

		$end_datetime = tribe_get_end_date();
		$end_date = tribe_get_end_date( null, false );
		$end_time = tribe_get_end_date( null, false, $time_format );
		$end_ts = tribe_get_end_date( null, false, TribeDateUtils::DBDATEFORMAT );

		// All day (multiday) events
		if ( tribe_event_is_all_day() && tribe_event_is_multiday() ) :
			?>

			<li> <span class="h4">Start:</span> <abbr title="<?php esc_attr_e( $start_ts ) ?>"> <?php echo tribe_get_start_date($event = null, $displayTime = false, $dateFormat ='F jS'); ?> </abbr></li>
			<li class="time-detail-last"> <span class="h4">End:</span> <abbr title="<?php esc_attr_e( $start_ts ) ?>"> <?php echo tribe_get_end_date($event = null, $displayTime = false, $dateFormat ='F jS'); ?> </abbr></li>

		<?php
		// All day (single day) events
		elseif ( tribe_event_is_all_day() ):
			?>

			<li class="time-detail-last"> <span class="h4">Date:</span> <abbr title="<?php esc_attr_e( $start_ts ) ?>"> <?php echo tribe_get_start_date($event = null, $displayTime = false, $dateFormat ='F jS'); ?> </abbr></li>

		<?php
		// Multiday events
		elseif ( tribe_event_is_multiday() ) :
			?>

			<li><span class="h4">Start:</span> <abbr title="<?php esc_attr_e( $start_ts ) ?>"> <?php echo tribe_get_start_date($event = null, $displayTime = true, $dateFormat ='F jS g:i a'); ?> </abbr></li>
			<li class="time-detail-last"><span class="h4">End:</span> <abbr title="<?php esc_attr_e( $end_ts ) ?>"> <?php echo tribe_get_end_date($event = null, $displayTime = true, $dateFormat ='F jS g:i a'); ?> </abbr>


		<?php
		// Single day events
		else :
			?>
			<li> <span class="h4">Date:</span> <abbr title="<?php esc_attr_e( $start_ts ) ?>"> <?php echo tribe_get_start_date($event = null, $displayTime = false, $dateFormat ='F jS'); ?> </abbr></li>
			<li class="time-detail-last"> <span class="h4">Time:</span> <abbr class="tribe-events-abbr updated published dtstart" title="<?php esc_attr_e( $end_ts ) ?>">
				<?php if ( $start_time == $end_time ) {
					esc_html_e( $start_time );
					} else {
						esc_html_e( $start_time . $time_range_separator . $end_time );
					} ?>
				</abbr>
			</li>

		<?php endif ?>
		
		<?php
		$cost = tribe_get_formatted_cost();
		if ( ! empty( $cost ) ):
			?>
			<li> <span class="h4">Cost:</span> <?php esc_html_e( tribe_get_formatted_cost() ) ?> </li>
		<?php endif ?>

		
		<?php
		$website = tribe_get_event_website_link();
		if ( ! empty( $website ) ):
			?>
			<li> <span class="h4">Website:</span> <?php echo $website ?> </li>
		<?php endif ?>

		
		<?php do_action( 'tribe_events_single_meta_details_section_end' ) ?>
	</ul>
