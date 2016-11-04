<?php

/*
Template Name: Landing Page
*/

?>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>Front End Developer | Galen Strasen - She Speaks in Code</title>
<meta name="description" content="Galen Strasen is a Front End Developer living and working in Jackson Hole, Wyoming"/>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--
<?php if (get_option('sg_color_scheme')==''): ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/scheme_orange.css" />
<?php endif; ?>
<?php if (get_option('sg_color_scheme')=='Orange'): ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/scheme_orange.css" />
<?php endif; ?>
<?php if (get_option('sg_color_scheme')=='Red'): ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/scheme_red.css" />
<?php endif; ?>
<?php if (get_option('sg_color_scheme')=='Blue'): ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/scheme_blue.css" />
<?php endif; ?>
<?php if (get_option('sg_color_scheme')=='Green'): ?>	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/scheme_green.css" />
<?php endif; ?>
<?php if (get_option('sg_color_scheme')=='Purple'): ?>	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/scheme_purple.css" />
<?php endif; ?>
-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One|Source+Sans+Pro:400,900|Raleway:400,900' rel='stylesheet' type='text/css'>

<?php if (function_exists('wp_enqueue_script') && function_exists('is_singular')) : ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php endif; ?>


<?php if (get_option('sg_enable_fancy')==''): ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js?v=2.0.6"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({ wrapCSS    : 'fancybox-custom', closeClick : true, helpers : { title : { type : 'inside' },	overlay : { css : { 'background-color' : '#eee' } } } }); });
	</script>
<?php endif; ?>
<?php if (get_option('sg_enable_fancy')=='Yes'): ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js?v=2.0.6"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({ wrapCSS    : 'fancybox-custom', closeClick : true, helpers : { title : { type : 'inside' },	overlay : { css : { 'background-color' : '#eee' } } } }); });
	</script>
<?php endif; ?>

<?php if (get_option('sg_enable_back')==''): ?>
	<script type="text/javascript">
		jQuery(function() { jQuery(window).scroll(function() { if(jQuery(this).scrollTop() != 0) { jQuery('#toTop').fadeIn();} else { jQuery('#toTop').fadeOut(); } });
		jQuery('#toTop').click(function() { jQuery('body,html').animate({scrollTop:0},800); });	});
	</script>	
<?php endif; ?>
<?php if (get_option('sg_enable_back')=='Yes'): ?>
	<script type="text/javascript">
		jQuery(function() { jQuery(window).scroll(function() { if(jQuery(this).scrollTop() != 0) { jQuery('#toTop').fadeIn();} else { jQuery('#toTop').fadeOut(); } });
		jQuery('#toTop').click(function() { jQuery('body,html').animate({scrollTop:0},800); });	});
	</script>
<?php endif; ?>

</head>
<body <?php body_class('page_bg'); ?> style="BACKGROUND-IMAGE: linear-gradient( 225deg, #FC876C, #FC7474, #FB4CBC, #BB41F4, #8D5EFC )"> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47956832-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<div style="position: relative; height: 100%; width: 100%;">
	<div style="position: absolute; top: 50%; width: 100%; z-index:1; text-align: center; transform: translateY(-50%);">
		<h1 style="text-transform: uppercase; margin-bottom: 40px; font: 900 50px 'Raleway',sans-serif; color: #fff;"><span style="font-size: 70px; color: #eee9e5;">Galen Strasen</span><br/> <span style="font-family: 'Source Sans Pro',sans-serif; text-transform: lowercase;">is a</span><br/> <span style="font-size: 80px; color: #c0d1c2;">Web Developer</span><br/> <span style="font-family: 'Source Sans Pro',sans-serif; text-transform: none;">Living in Jackson Hole, Wyoming</span> </h1>
		<h2 style="font-family: 'Source Sans Pro', sans-serif; font-weight: 900; text-transform: uppercase; color: #fff; font-size: 30px; line-height: 40px;">This website is a work in progress.<br/> In the meantime, connect with me on <a href="https://www.linkedin.com/pub/galen-strasen/12/161/b51" target="_blank" style="color: #e6eba9;">LinkedIn!</a></h2>
	</div>

</div>
</body>
</html>