<?php if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) ) return; ?>
<div id="comments">

	<?php if ( have_comments() ) : global $comments_by_type; $comments_by_type = &separate_comments( $comments ); if ( ! empty($comments_by_type['comment']) ) : ?>
	
	<div id="comments-list" class="comments">
		<h3><?php comments_number(); ?></h3>
		
		<?php if ( get_comment_pages_count() > 1 ) : ?>
		<nav id="comments-nav-above" class="comments-navigation" role="navigation">
			<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
		</nav>
		<?php endif; ?>
		
		<ul>
		<?php wp_list_comments('type=comment'); ?>
		</ul>
		
		<?php if ( get_comment_pages_count() > 1 ) : ?>
		<nav id="comments-nav-below" class="comments-navigation" role="navigation">
			<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
		</nav>
		<?php endif; ?>
		
	</div><!-- #comments-list -->
	
	<?php endif; if ( ! empty($comments_by_type['pings']) ) : $ping_count = count($comments_by_type['pings']); ?>
	
	<div id="trackbacks-list" class="comments">
		<h3><?php echo '<span>'.$ping_count.'</span> '.($ping_count > 1 ? __( 'Trackbacks' ) : __( 'Trackback') ); ?></h3>
		<ul>
		<?php wp_list_comments('type=pings'); ?>
		</ul>
	</div><!-- #trackbacks-list -->
	
	<?php endif; endif; if ( comments_open() ) comment_form(); ?>
	
</div><!-- #comments -->