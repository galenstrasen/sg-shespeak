<?php

/*
Template Name: Landing Page
*/



?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/shespeaks-favicon.ico">
	<title>Front End Developer | Galen Strasen - She Speaks in Code</title>
	<meta name="description" content="Galen Strasen is a Front End Developer living and working in Jackson Hole, Wyoming"/>

	<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One|Source+Sans+Pro:200,300,400,900|Raleway:400,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Josefin+Slab:400,700|Old+Standard+TT:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Kanit:400,900,800,700,400italic,200' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Rubik:400,300,900,700,500|Rubik+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
	<script src="https://use.typekit.net/nex7rmb.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<?php wp_head(); ?>
	
	<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> -->


</head>

<body <?php body_class(); ?> >
<?php get_template_part('partials/global/ga'); ?>
<style type="text/css">
html {
	height: 100%;
}
body {
	margin: 0;
	padding: 0;
	height: 100%;
	min-height: 100%;
	/*
font-family: 'Raleway Dots', sans-serif;
	font-family: monospace;
*/
	background-color: #fff; 
	color: #000f10;
	/* background-image: -webkit-linear-gradient(-200deg, rgb(121,203,197), rgb(238,164,158));
	background-image:    -moz-linear-gradient(-200deg, rgb(121,203,197), rgb(238,164,158));
	background-image:      -o-linear-gradient(-200deg, rgb(121,203,197), rgb(238,164,158));
	background-image:         linear-gradient(-200deg, rgb(121,203,197), rgb(238,164,158)); */
	background-color: #52d2ef; /*top colour*/
background-image: -webkit-linear-gradient(top, #52d2ef, #71bd98);
background-image:    -moz-linear-gradient(top, #52d2ef, #71bd98);
background-image:      -o-linear-gradient(top, #52d2ef, #71bd98);
background-image:         linear-gradient(to bottom, #52d2ef, #71bd98);
}

.wrapper {

	width: 100%;
	
}

.absolute-box {
	/* position: absolute; 
	top: 50%; 
	
	transform: translateY(-50%); */
	padding-top: 100px;
	width: 100%; 
	z-index:1; 
	text-align: center; 
}

.fixed-box {
	/* position: fixed; */
	bottom: 40px;
	width: 100%;
}

h1 {
	/* margin-bottom: 100px;  */
	
	/* font: 700 50px 'Rubik',sans-serif;  */
}

h2 {
	/* font: 400 23px/40px 'Rubik', sans-serif;  */


	/*
width: 99.5%;
	padding: 15px 0;
	margin-left: 0.25%;
*/
	/*
border-top: 5px solid #008b8b;
	border-bottom: 5px solid #008b8b;
*/
	
	text-align: center;
}

h2 a,
h2 a:visited {
	color: #008080;
}

h2 a:hover,
h2 a:active {
	/* color: #111; */
	text-decoration: none;
}

h1 span {
	/* text-transform: uppercase; */
	/* font-weight: 900; */
	/*
font-size: 70px ; 
	color: #00353a;
*/
	/* font-family: 'Rubik', serif; */
	/* color: #00a3a8; */
}

h1 span.name {
	/*
font-size: 90px; 
	text-transform: uppercase;
*/
/* 	font-family: 'Rubik', serif; */
	/* color: #0098a6; */
	
}

h1 span.role {
	/* font-size: 80px; */
}

a,
button {
	transition: all .5s linear;
	-moz-transition: all .5s linear; /* Firefox 4 */
	-webkit-transition: all .5s linear; /* Safari and Chrome */
	-o-transition: all .5s linear; /* Opera */
	text-decoration: none;
}

a:focus,
button:focus,
input[type=submit]:focus {
	outline: none!important;
}

.tri-wrap {
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
}

.triangle {
	height: 2px;
width: 40px;
background:  #fffacd;
float: left;
margin-right: 40px;
position: relative;
}

.triangle:last-child {
	margin-right: 0;
}

.triangle:before {
top: -23px;
height:28px;
content: '';
position: absolute;
width: 2px;
background: #fffacd;
transform: rotate(45deg);
left: 10px;
}

.triangle:after {
	top: -23px;
height: 28px;
content: '';
position: absolute;
width: 2px;
background:  #fffacd;
transform: rotate(-45deg);
right: 10px;
}

.part {
	height: 100vh;
  width: 100%;
  display: table;
}
.intro {

/*
background-image: -ms-linear-gradient(bottom, #ffffff 0%, #00ffff 60%);


background-image: -moz-linear-gradient(bottom, #ffffff 0%, #00ffff 60%);


background-image: -o-linear-gradient(bottom, #ffffff 0%, #00ffff 60%);


background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #ffffff), color-stop(60, #00ffff));


background-image: -webkit-linear-gradient(bottom, #ffffff 0%, #00ffff60%);


background-image: linear-gradient(to top, #ffffff 0%, #00ffff 60%);
*/

background: #111;
	height: 100vh;
	width: 100%;
	display: table;
}

.sn-wrapper {
	display: table-cell;
	vertical-align: middle;
	text-align: center;
	padding-top: 84px;
}
.sitename {
	font-family: "etica-display";
	/* font-weight: 900; */
	/* font-style: italic; */
	font-size: 40px;
	letter-spacing: 30px;
	text-transform: uppercase;
	font-weight: 900;
	line-height: 110%;
	color: #fffee3;
	color: #2e4a21;
	color: #fffee3;
	margin: 0;
	padding: 30px 0 10px;
	position: absolute;
	top: 0;
	width: 100%;
	text-align: center;
}
.sitename .line {
	display: inline-block;
	padding-left: 100px;
	padding-right: 100px;
	margin-bottom: 20px;
}

.sitename .line.-lg {
	font-size: 100px;
	line-height: 110%;
}

.sitename .line.-black {
	background: black;
	color: white;
	position: relative;
}
h1 {
	font-family: "etica-display";
	color: #111;
	color: #fff;
	font-size: 50px;
/* 	text-transform: uppercase; */
	font-weight: 900;
	position: relative;
	z-index: 2;
	letter-spacing: 2px;
	/* margin-top: 84px; */
}
h1 strong {
	font-weight: 900;
	font-size: 90px;
	text-transform: none;
	}
	
h1 .name {  }	
/*
.sitename .line.-black::before,
.sitename .line.-black::after {
	content: '';
	position: absolute;
	top: 0;
	height: 0;
	width: 0;
	}

.sitename .line.-black.-first::before {
	left: -60px;
	
	border-top: 110px solid transparent;
	border-bottom: 0 solid transparent;
	border-right: 60px solid black;

}


.sitename .line.-black.-second::before {
	left: -80px;
	
	border-top: 110px solid transparent;
	border-bottom: 0 solid transparent;
	border-right: 80px solid black;

}


.sitename .line.-black.-first::after {
	right: -80px;
	
	border-top: 0 solid transparent;
	border-bottom: 110px solid transparent;
	border-left: 80px solid black;
}


.sitename .line.-black.-second::after {
	right: -60px;
	
	border-top: 0 solid transparent;
	border-bottom: 110px solid transparent;
	border-left: 60px solid black;
}
*/

.sitename .line.-white {
	background: white;
	color: black;
}

.footer {
font-family: "etica-display";
letter-spacing: 2px;
/* font-weight: 900; */
font-size: 24px;
	/* background: #2e4a21 url('/wp-content/themes/shespeaks/assets/img/palms.png') top center; */ background: turquoise; padding: 60px; text-align: center; color: #fff;
}

.footer h3 {
	font-weight: 900;
	text-transform: uppercase;
	letter-spacing: 5px;
}

.footer a {
	color: magenta;
	transition: all .2s ease-in-out;
	font-weight: 900;
	color: #111;
}

.footer a:hover {
	color: orange;
	color: magenta;
	text-decoration: none;
}

.palms {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 0;
	opacity: 0.9;
	width: 100%;
	height: 100%;
	background: url('/wp-content/themes/shespeaks/assets/img/palms-white.png');
	background: url('/wp-content/themes/shespeaks/assets/img/palms.png');
	background: url('/wp-content/themes/shespeaks/assets/img/palms-green.png') top center;
} 


.dreamy {
	font-family: "acta-poster-swashes";
	letter-spacing: 5px;
}
</style>

<div class="wrapper">

<div class="intro">
<div class="palms"></div>
	<section class="sn-wrapper">
		<h2 class="sitename">She Speaks in Code</h2>
		<h1>
			<strong><span class="name" style="margin-right: 20px;">Galen Strasen</span></strong>
			is a<br/> 
			<strong><span class="role"><em>Web Developer</em></span></strong><br/> 
			living in 
			<span class="dreamy">dreamy</span> <br/>
			<span style="font-size: 80px;">Oakland, California.</span>
		</h1>
	<!--
<h2 class="sitename">
	<span class="line -white">She</span> <br/>
	<span class="line -black -lg -first">Speaks</span> <br/>
	<span class="line -white">in</span> <br/>
	<span class="line -black -lg -second">Code</span></h2>
-->
	</section>
</div>
<div class="footer" style="">
<h3>Please forgive this website, it is clearly a work in progress.</h3>
	<p>Check out <a href="http://wearetmbr.com/" target="_blank">TMBR</a> for some of the projects I've worked on.<br/> You can also connect with me on <a href="https://www.linkedin.com/pub/galen-strasen/12/161/b51" target="_blank">LinkedIn</a>.
</div>
	<div class="absolute-box" style="display:none;">
		<div class="tri-wrap">
		<div class="triangle"></div>
		<div class="triangle"></div>
		<div class="triangle"></div>
		<div class="triangle"></div>
		<div class="triangle"></div>
		</div>
		<h1>
			<span class="name">Galen Strasen</span><br/> 
			is a<br/> 
			<span class="role">Web Developer</span><br/> 
			living in <span style="text-decoration: line-through; text-transform: none;">Jackson Hole, Wyoming</span><br/> <span style="color:#263c4c;">Oakland, California.</span>
		</h1>
	</div>
	

<div class="fixed-box navbar-fixed-bottom" style="display: none;">
		<h2>This website is a work in progress. In the meantime, connect with me on <a href="https://www.linkedin.com/pub/galen-strasen/12/161/b51" target="_blank">LinkedIn!</a></h2>
	</div>
</div>
</body>
</html>