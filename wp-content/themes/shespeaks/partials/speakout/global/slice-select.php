	<?php 
	if(get_field('display_slices')) : 
		while(has_sub_field('display_slices')) : 
	
			if		(get_sub_field('select_slice') == 'book_champion') 	{ get_template_part('partials/slices/book-champion'); } 
			elseif	(get_sub_field('select_slice') == 'map') 			{ get_template_part('partials/slices/map'); } 
			elseif	(get_sub_field('select_slice') == 'postcards')		{ get_template_part('partials/slices/postcards'); } 
			elseif	(get_sub_field('select_slice') == 'request_books') 	{ get_template_part('partials/slices/request-books'); } 
			elseif	(get_sub_field('select_slice') == 'reviews') 		{ get_template_part('partials/slices/reviews'); } 
			elseif	(get_sub_field('select_slice') == 'social') 		{ get_template_part('partials/slices/social'); } 
			elseif	(get_sub_field('select_slice') == 'solutions') 		{ get_template_part('partials/slices/solutions'); } 
		
		endwhile; 
	endif; 
	?>