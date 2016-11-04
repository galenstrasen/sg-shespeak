<?php 
$author = get_field('author_name');
$author_description = get_field('author_bio');
$author_profession =  get_field('author_profession'); 
$image = get_field('author_headshot' );
				
?>
				
				<div class="author-info">
					<div class="row">
						<div class="col-sm-12">
							<?php if ($image) { ?>
								<img src="<?php echo $image['sizes']['thumbnail']; ?>" class="img-responsive pull-left"/>
							<?php } ?>	
						
							<p class="gray">
								<?php if($author){?><em class="uppercase"><?php echo $author; ?></em><?php } ?><?php if($author_profession){?><em>,&nbsp;&nbsp;<?php echo $author_profession; ?></em><?php } ?> 
								<?php if($author_description){?>
								&mdash; <?php echo $author_description;?>
								<?php } ?> 
							</p>
						</div><!-- /col -->
					</div><!-- /row -->
				</div><!-- /author-info -->