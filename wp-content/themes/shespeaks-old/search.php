<?php get_header(); ?>

<div id="page-wrap">	

<!-- IF HAVE SEARCH RESULTS -->

<?php if ( have_posts() ) : ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="tac archive-page-content">
					<h1 class="h2"><?php printf( __( 'Search Results for: %s'), get_search_query() ); ?></h1>
				</div>
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('partials/post/post-feed'); ?>
				<?php endwhile; ?>
				</div><!-- /row -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
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
			
			
			
	<!-- IF NO SEARCH RESULTS -->	
	
	<?php else : ?>
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-sm-7 col-sm-offset-1">
				<h1 class="h2"><?php _e( 'Nothing Found' ); ?></h1>

				<p><?php _e( 'Sorry, nothing matched your search. Please try again.'); ?></p>
				<?php get_search_form(); ?>
			</div><!-- /col -->
			
			<?php get_sidebar(); ?>
			
		</div><!-- /row -->
	</div><!-- /container-fluid -->
			
	<?php endif; ?>
			
			
</div><!-- #page-wrap -->

<?php get_footer(); ?>