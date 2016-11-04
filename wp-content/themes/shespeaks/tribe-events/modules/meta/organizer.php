<?php
/**
 * Single Event Meta (Organizer) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/details.php
 *
 * @package TribeEventsCalendar
 */

$phone = tribe_get_organizer_phone();
$email = tribe_get_organizer_email();
$website = tribe_get_organizer_website_link();
?>


	<h3 class="gray"> Event Organizer </h3>
	<ul class="event-organizer-list">
		<?php do_action( 'tribe_events_single_meta_organizer_section_start' ) ?>

		<li class="organizer-name"><span class="h4"><?php echo tribe_get_organizer() ?></span></li>

		<?php if ( ! empty( $phone ) ): ?>
			<li><i class="fa fa-phone fa-fw"></i> <?php echo $phone ?> </li>
		<?php endif ?>

		<?php if ( ! empty( $email ) ): ?>
			<li><i class="fa fa-envelope-o fa-fw"></i> <?php echo $email ?> </li>
			
		<?php endif ?>

		<?php if ( ! empty( $website ) ): ?>
			<li><i class="fa fa-globe fa-fw"></i> <?php echo $website ?> </li>
			
		<?php endif ?>

		<?php do_action( 'tribe_events_single_meta_organizer_section_end' ) ?>
	</dl>
