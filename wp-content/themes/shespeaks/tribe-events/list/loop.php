<?php
/**
 * List View Loop
 * This file sets up the structure for the list loop
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/loop.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php
global $more;
$more = false;
?>

<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
				
				
					
						<?php while ( have_posts() ) : the_post(); ?>
							<?php do_action( 'tribe_events_inside_before_loop' ); ?>
					
							<!-- Month / Year Headers -->
							<div class="col-sm-10 col-sm-offset-2">
								<?php tribe_events_list_the_date_headers(); ?>
							</div>
							
							<!-- Event  -->
							<div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?> col-sm-12">
								<?php tribe_get_template_part( 'list/single', 'event' ) ?>
							</div><!-- .hentry .vevent -->
					
					
							<?php do_action( 'tribe_events_inside_after_loop' ); ?>
						<?php endwhile; ?>
					
					
					
				</div><!-- /row -->
			</div><!-- /col -->
		</div><!-- /row -->
</div><!-- /container -->
