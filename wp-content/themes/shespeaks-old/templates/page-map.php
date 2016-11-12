<?php

/*
Template Name: Map
*/

$transient_name = 'json_is_valid';
$valid = get_transient( $transient_name );
if ( !$valid || WP_DEBUG )
{
	$json = gatherPostsToJSON();
	storeMapPointsToFile( $json );
	set_transient( $transient_name, 1, 5 * MINUTE_IN_SECONDS );
}

?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php edit_post_link(); ?>

<div id="page-wrap">

	<?php get_template_part('partials/global/header-menu'); ?>

	<div class="container-fluid no-gutter">
		<div class="row">
			<div class="col-sm-12">

				<div id="map-wrap">
				<nav class="menu-ui">
					<a class="active map-filter heart-icon" id="all-filter" data-filter="all">
						<span class="filter-ico"><?php get_template_part('assets/img/icons/heart.svg'); ?></span>
						<span class="filter-text">All<br class="visible-mobile"/> Supporters</span>
					</a>
					<a class="map-filter" id="friends-filter" data-filter="friends">
						<span class="filter-ico"><?php get_template_part('assets/img/icons/form1-friend.svg'); ?></span>
						<span class="filter-text">Campaign<br class="visible-mobile"/> Friends</span>
					</a>
					<a class="map-filter" id="activists-filter" data-filter="activists">
						<span class="filter-ico"><?php get_template_part('assets/img/icons/form2-activist.svg'); ?></span>
						<span class="filter-text">Campaign<br class="visible-mobile"/> Activists</span>
					</a>
					<a class="map-filter" id="champions-filter" data-filter="books">
						<span class="filter-ico"><?php get_template_part('assets/img/icons/form3-champion.svg'); ?></span>
						<span class="filter-text">Book<br class="visible-mobile"/> Champions</span>
					</a>
				</nav>
				
				<div class="map-count tac" id="friends-count">
					<?php $friends = get_category('16'); $fr_count = $friends->count;?>
					<p class="h1"><?php echo $fr_count; ?></p>
					<h6>Campaign Friends</h6>
				</div>
				<div class="map-count tac" id="activists-count">
					<?php $activists = get_category('15'); $ac_count = $activists->count;?>
					<p class="h1"><?php echo $activists->count; ?></p>
					<h6>Campaign Activists</h6>
				</div>
				<div class="map-count tac" id="champions-count">
					<?php $books = get_category('17'); $bo_count = $books->count;?>
					<p class="h1"><?php echo $books->count; ?></p>
					<h6>Book Champions</h6>
				</div>
				<div class="map-count tac count-view" id="all-count">
					<?php $allSupporters = $fr_count + $ac_count + $bo_count; ?>
					<p class="h1"><?php print ($allSupporters); ?></p>
					<h6>Supporters</h6>
				</div>


				<div id="campaign-map"></div>
				</div><!-- #map-wrap -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->

	<?php get_template_part('partials/map/map-script'); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<?php the_content(); ?>
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->

	<?php get_template_part('partials/global/slice-select'); ?>

</div><!-- #page-wrapper -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
