<?php

/*
Template Name: Archive Page
*/

?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php edit_post_link(); ?>
<div id="page-wrap">

	<?php get_template_part('partials/global/header-menu'); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="tac archive-page-content">
					<h1 class="h2"><?php if(get_field('custom_title_text')) { the_field('custom_title_text'); }  else { the_title(); } ?></h1>
					<?php the_content(); ?>
				</div><!-- /tac -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php 
	$GLOBALS['cat_query'] = get_field('archive_category');
	
	$args = array(
		'paged' => get_query_var( 'paged' ),
		'tax_query' => array (
			array (
				'taxonomy' => 'category',
				'terms' => $GLOBALS['cat_query'],
				),
			),
		'posts_per_page' => '9',
		'orderby' => 'date',
		); 
		
	query_posts( $args ); ?>
	
	<?php if ( have_posts() ) : ?> 
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
				
				<?php while ( have_posts() ) : the_post(); ?>
				<?php
					// IF IS NEWS CATEGORY
					if($GLOBALS['cat_query'] == '7'){ get_template_part('partials/archive/news-feed'); }
					
					// IF IS BLOG CATEGORY
					elseif($GLOBALS['cat_query'] == '8'){ get_template_part('partials/archive/blog-feed'); }
					
					//IF IS REVIEWS CATEGORY
					elseif($GLOBALS['cat_query'] == '11'){ get_template_part('partials/archive/reviews-feed'); }
					
					//IF IS VOICES CATEGORY
					elseif($GLOBALS['cat_query'] == '9'){ get_template_part('partials/archive/voices-feed'); }
					
					// IF IS PHOTOS & CATEGORIES CATEGORY
					elseif($GLOBALS['cat_query'] == '10'){ get_template_part('partials/archive/photos-feed'); }
					
					// IF IS POSTCARDS CATEGORY
					elseif($GLOBALS['cat_query'] == '14'){ get_template_part('partials/archive/postcards-feed'); }
					
					else { get_template_part('partials/archive/post-feed'); }
				?>	
				<?php endwhile;  ?>
				
				</div><!-- /row -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php endif; ?>		
			
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="archive-nav">
			    <?php
			        global $wp_query;
			        $big = 999999999; // need an unlikely integer
			        $args = array(
			            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			            'format' => '?page=%#%',
			            'total' => $wp_query->max_num_pages,
			            'current' => max( 1, get_query_var( 'paged') ),
			            'show_all' => false,
			            'end_size' => 2,
			            'mid_size' => 1,
			            'prev_next' => True,
			            'prev_text' => __('&lt; Prev'),
			            'next_text' => __('Next &gt;'),
			            'type' => 'list',
			            );
			        echo paginate_links($args);
			    ?>
				</div><!-- /archive-nav -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php  wp_reset_query(); ?>
	
	<?php get_template_part('partials/global/slice-select'); ?>
		
</div><!-- #page-wrapper -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
