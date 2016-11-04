/* ON DOM READY
====================================*/

			
	
jQuery(document).ready(function($) {

	//HOMEPAGE SLIDESHOW
	$('#home-slider').owlCarousel({
		items: 1,
		autoplay: true,
		animateOut: 'fadeOut',
		loop: true,
		smartSpeed: 300
	});
	
	//HOMEPAGE DATA SLIDESHOW
	$('#data-slider').owlCarousel({
		items: 1,
		autoplay: true,
		dots: true,
		loop: false
	});
	
	//HOMEPAGE DATA SLIDESHOW
	$('#teaser-slider').owlCarousel({
		items: 1,
		autoplay: true,
		dots: true,
		loop: false
	});
	
	//POSTCARDS SLIDESHOW
	$('#postcard-slider').owlCarousel({
		items: 1,
		autoplay: true,
		animateOut: 'fadeOut',
		loop: true,
		smartSpeed: 300
	});
	
	//HOMEPAGE REVIEWS SLIDESHOW
	$('#reviews-slider').owlCarousel({
		items: 1,
		autoplay: true,
		dots: true,
		loop: false
	});
	
	//SOCIAL SLIDESHOW
	$('#social-slider').owlCarousel({
		items: 1,
		autoplay: true,
		animateOut: 'fadeOut',
		loop: true,
		smartSpeed: 300
	});
	
	//RANDOM SLIDESHOW
	$('#solutions-slider').owlCarousel({
		items: 1,
		autoplay: true,
		animateOut: 'fadeOut',
		loop: true,
		smartSpeed: 300
	});




	// SHARE BUTTONS
	$('.share').on('click',function(e){
		e.preventDefault();
		$(this).parent().toggleClass('show');
	});
	
	// HEADER SEARCH
	$('#header-search').on('click',function(e){
		e.preventDefault();
		$(this).parents('.social-search').toggleClass('show-search');
	});
	
	// RESPONSIVE MENU TOGGLE
	$('.gray-nav-toggle').on('click',function(e){
		e.preventDefault();
		$(this).next('.gray-menu-wrap').toggleClass('show-menu');
		$(this).toggleClass('ham-open');
	});
	
	
	
	
	// BOOK CHAMPIONS IMAGE GALLERY 
	$('.impact-photos').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		}
		
	});
	
	// BOOK CHAMPIONS VIDEO GALLERY 
	$('.impact-video').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
	
	
	
	
	// OVERLAY MODAL
	$('.open-overlay > a').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',
		mainClass: 'ctaOverlay my-mfp-zoom-in',
		closeBtnInside: true,
		removalDelay: 300,
		

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
	
	// The button that is clicked termed the active tab in overlay
	$('a#cta-button').on('click',function(e){
		e.preventDefault();
		if($('li.form3').hasClass('active')){
			alert('Tab 3 has class active');
			$('li.form3').removeClass('active'); 
			$('#form3-mfp').removeClass('active'); 
			$('li.form1').addClass('active'); 
			$('#form1-mfp').addClass('active'); 
		}
		else if($('li.form1').hasClass('active')){ }
		else {
			$('li.form1').addClass('active');
			$('#form1-mfp').addClass('active');
		}
	});
	
	$('.request-books > a').on('click',function(e){
		e.preventDefault();
		if($('li.form1').hasClass('active')){
			$('li.form1').removeClass('active'); 
			$('#form1-mfp').removeClass('active'); 
			$('li.form3').addClass('active'); 
			$('#form3-mfp').addClass('active'); 
		}
		else if($('li.form3').hasClass('active')){ }
		else {
			$('li.form3').addClass('active');
			$('#form3-mfp').addClass('active');
		}
	});
	
	
	
		
	
	
	
	
	
  
});
//END DOC.READY




(function($){
	    
       
	$('#page-wrap').waypoint(function() {
	  	$('.cta-btn-wrap').toggleClass('cta-scrolled');
	}); 
	
	$('.logo-nav-wrap').waypoint(function() {
	  	$('#join-campaign').toggleClass('scrolled');
	}); 
	
	
	$('#tag-wrapper').on('show.bs.collapse', function(){
		$('#tag-toggle').addClass('active');
	});
	
	$('#tag-wrapper').on('hidden.bs.collapse', function(){
		$('#tag-toggle').removeClass('active');
	});
    
    
    
	   





})(jQuery);


	

