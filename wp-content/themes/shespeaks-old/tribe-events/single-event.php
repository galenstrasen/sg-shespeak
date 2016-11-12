<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$event_id = get_the_ID();

?>
<div id="page-wrap">

	<div id="post-header-wrap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 visible-lg">
					<i class="fa fa-calendar fa-3x pull-right fa-fw"></i>
				</div><!-- /col -->
				
				<div class="col-lg-7 col-md-8 col-sm-10 col-xs-9">	
					<i class="fa fa-calendar fa-3x pull-left fa-fw hidden-lg"></i>
					<h1 class="h2"><?php the_title(); ?></h1>	
				</div><!-- /col -->
				
				<div class="col-md-4 col-sm-2 col-xs-3">
					<a href="<?php echo tribe_get_events_link() ?>" class="btn btn-gray btn-sm back-btn">Back</a>
				</div><!-- /col -->
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- #post-header-wrap -->
	
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-lg-7 col-lg-offset-1 col-md-8 col-xs-12">
				
				<h4 class="gray"><?php echo tribe_events_event_schedule_details(); ?></h4>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('x-large', array('class' => 'img-responsive post-feat-img')); }  ?>

				<!-- Notices -->
				<?php tribe_events_the_notices() ?>

				<?php while ( have_posts() ) :  the_post(); ?>
				
				<!-- Event content -->
				<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
			
				<?php the_content(); ?>
				
				<!-- .tribe-events-single-event-description -->
				<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
				
				<div class="share-tags">
					
						<?php get_template_part('partials/global/share'); ?>
						<?php get_template_part('partials/post/tags'); ?>
						
					</div><!-- /share-tags -->
				
				
				

				<!-- Event meta -->
				<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php
			/**
			 * The tribe_events_single_event_meta() function has been deprecated and has been
			 * left in place only to help customers with existing meta factory customizations
			 * to transition: if you are one of those users, please review the new meta templates
			 * and make the switch!
			 */
			if ( ! apply_filters( 'tribe_events_single_event_meta_legacy_mode', false ) ) {
				tribe_get_template_part( 'modules/meta' );
			} else {
				echo tribe_events_single_event_meta();
			}
			?>
			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
		
		<?php if ( get_post_type() == TribeEvents::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>

	
</div><!-- /col -->

			<?php get_sidebar(); ?>
		
		</div><!-- /row -->
</div><!-- container -->
</div><!-- #page-wrap -->