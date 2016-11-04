<div id="cta-form-toggle" class="zoom-anim-dialog mfp-hide">

	<div class="tar"><span class="icon icon-close mfp-close"></span></div><!-- /tar -->
	
	<div class="logo"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/pso-white2.png" alt="Population Speak Out" /></div><!-- /logo -->
	
	<div class="cta-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="cta-header">
						<h2><?php the_field('cta_header_text','option'); ?></h2>
						<p><?php the_field('cta_sub_text','option'); ?></p>
					</div><!-- /cta-header -->
				</div><!-- /col -->
			</div><!-- /row -->
							
			<div class="row">
				<div class="col-sm-12">
								
					<div class="cta-forms">
						<ul class="nav-tabs" role="tablist">
										
							<li class="form1">
								<a href="#form1-mfp" role="tab" data-toggle="tab">
									<div class="cta-icons">
										<span class="cta-ico-wrap cta-icon">
										<?php get_template_part('assets/img/icons/form1-friend.svg'); ?>
										</span>
										<span class="cta-ico-wrap cta-submit">
										<?php get_template_part('assets/img/icons/checkmark.svg'); ?>
										</span>
									</div>
									<h5><?php the_field('form1_header','option');?></h5>
									<p><?php the_field('form1_sub_text','option');?></p>			
								</a>
							</li>
											
							<li class="form2">
								<a href="#form2-mfp" role="tab" data-toggle="tab">
									<div class="cta-icons">
										<span class="cta-ico-wrap cta-icon">
										<?php get_template_part('assets/img/icons/form2-activist.svg'); ?>
										</span>
										<span class="cta-ico-wrap cta-submit">
										<?php get_template_part('assets/img/icons/checkmark.svg'); ?>
										</span>
									</div>
									<h5><?php the_field('form2_header','option');?></h5>
									<p><?php the_field('form2_sub_text','option');?></p>			
								</a>
							</li>
											
							<li class="form3">
								<a href="#form3-mfp" role="tab" data-toggle="tab">
									<div class="cta-icons">
										<span class="cta-ico-wrap cta-icon">
										<?php get_template_part('assets/img/icons/form3-champion.svg'); ?>
										</span>
										<span class="cta-ico-wrap cta-submit">
										<?php get_template_part('assets/img/icons/checkmark.svg'); ?>
										</span>
									</div>
									<h5><?php the_field('form3_header','option');?></h5>
									<p><?php the_field('form3_sub_text','option');?></p>			
								</a>
							</li>		
																
							<li class="form4">
								<a href="#form4-mfp" role="tab" data-toggle="tab">
									<div class="cta-icons">
										<span class="cta-ico-wrap cta-icon text-icon">
										$
										</span>
										<span class="cta-ico-wrap cta-submit">
										<?php get_template_part('assets/img/icons/checkmark.svg'); ?>
										</span>
									</div>
									<h5><?php the_field('form4_header','option');?></h5>
									<p><?php the_field('form4_sub_text','option');?></p>			
								</a>
							</li>
											
							<li class="moving-arrow">
								<div class="absolute">
									<i class="fa fa-long-arrow-down fa-3x moving-arrow"></i>
								</div>
							</li>
											
						</ul>
						
										<!-- Tab panes -->
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="tab-content">
													
										<div class="tab-pane" id="form1-mfp">
											<?php gravity_form(1, false, false, false, '', true); ?>
										</div><!-- /tab-pane -->
														
										<div class="tab-pane" id="form2-mfp">
											
											<?php gravity_form(2, false, false, false, '20', true); ?>
										</div><!-- /tab-pane -->
														
										<div class="tab-pane" id="form3-mfp">	
											
											<?php gravity_form(8, false, false, false, '40', true); ?>
										</div><!-- /tab-pane -->
														
										<div class="tab-pane" id="form4-mfp">
											
											<?php //gravity_form(1, false, false); ?>
										</div><!-- /tab-pane -->
													
									</div><!-- /tab-content -->
									<div class="cta-social">
									
										<a href="https://twitter.com/GPSO2011" class="btn-icon btn-icon-sm btn-ghost btn-white" target="_blank"><i class="fa fa-twitter"></i></a>
										<a href="https://www.facebook.com/groups/population7billion/" class="btn-icon btn-icon-sm btn-ghost btn-white" target="_blank"><i class="fa fa-facebook"></i></a>
										<a href="#" class="btn-icon btn-icon-sm btn-ghost btn-white"><i class="fa fa-instagram"></i></a>

									</div>
								</div><!-- /col -->
							</div><!-- /row -->
						</div><!-- / container -->
						
					</div><!-- #cta-forms -->
									
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /cta-content -->
</div><!-- #cta-form-toggle -->

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(document).bind('gform_confirmation_loaded', function(event, form_id){
		if(form_id == 1) {
			jQuery('.cta-forms').addClass('form-submit');
			jQuery('li.form1').addClass('submit');
		} 
		else if(form_id == 2) {
			jQuery('.cta-forms').addClass('form-submit');
			jQuery('li.form2').addClass('submit');
		}
		else if(form_id == 8) {
			jQuery('.cta-forms').addClass('form-submit');
			jQuery('li.form3').addClass('submit');
		}
		else if(form_id == 4) {
			jQuery('.cta-forms').addClass('form-submit');
			jQuery('li.form4').addClass('submit');
		}
 });

         

    })

</script>


