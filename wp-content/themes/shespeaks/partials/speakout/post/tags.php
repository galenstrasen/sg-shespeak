
	<button type="button" class="btn-icon btn-icon-sm btn-ghost btn-gray" id="tag-toggle" data-toggle="collapse" data-target="#tag-wrapper" aria-expanded="false" aria-controls="tag-wrapper"><i class="fa fa-tags"></i></button>
	
	<div id="tag-wrapper" class="collapse">
		<?php
		$posttags = get_the_tags();
		if ($posttags) :
			foreach($posttags as $tag) { ?>
			
				<span class="tag"><?php echo $tag->name; ?></span>
			<?php } ?>
			
		<?php else : ?>
			<span class="tag">No tags available</span>
		<?php endif; ?>
	</div><!-- #tag-wrapper -->