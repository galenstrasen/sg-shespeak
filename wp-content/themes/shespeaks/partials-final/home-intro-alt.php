<?php
/**
 * Template part for displaying hero on frontpage
 *
 * @package WordPress
 * @subpackage shespeaks
 * @since 1.0
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

global $post; ?>

<section class="pg-section home-intro-alt">

  <!-- @TODO - are these image sizes optimized? -->
  <div class="js-hero-slider intro-vibes">
    <div class="item">
      <div class="img-bg" style="background-image: url('<?php bloginfo('template_directory');?>/public/images/water1.jpg');"></div>
    </div><!-- /item -->
    <div class="item">
      <div class="img-bg" style="background-image: url('<?php bloginfo('template_directory');?>/public/images/water2.jpg');"></div>
    </div><!-- /item -->
    <div class="item">
      <div class="img-bg" style="background-image: url('<?php bloginfo('template_directory');?>/public/images/water3.jpg');"></div>
    </div><!-- /item -->
  </div><!-- /js-hero-slider -->



  <div class="content">
    <div class="content-box">
      <header>
        <h1 class="h5 whatido"><span class="thing">Web Developer</span> <span class="thing">Front-End</span> <span class="thing">UX</span> <span class="thing">Design</span></h5>
        <h2 class="highlight myname"><span>Galen</span><span> Strasen</span></h2>
        <p class="divider">++++++</p>
      </header>
      <main>
        <p class="lead">Hi there, I'm Galen &mdash; a Front-End Web Developer based in dreamy Oakland, California.</p>
        <p>For the past 4 years I have had the pleasure of  working at <a href="http://wearetmbr.com" target="_blank">TMBR</a> - a rad little Creative Agency based in Jackson Hole, Wyoming. My focus has been in WordPress websites, where I am not only tasked with recreating beautiful web designs in code, but architecting custom content management systems tailored to the unique needs of each client. Want to know more? <span class="hidden">View the websites I consider to be my <a href="">personal favorites</a>, check out my <a href="<!-- @TODO - MAKE THIS AN OVERLAY -->">CV</a> or </span><a href="mailto:gstrasen@gmail.com">Drop me a line!</a>  </p>
      </main>
      <footer>
        <a href="mailto:gstrasen@gmail.com" class="btn">Get in Touch</a>
        <p class="connect-links"><a href="https://www.linkedin.com/in/galen-strasen-b5116112/" target="_blank">LinkedIn</a> / <a href="https://github.com/galenstrasen" target="_blank">Github</a></p>
      </footer>
    </div><!-- /content-box -->
    <img src="<?php bloginfo('template_directory');?>/public/images/headshot.jpg" alt="Galen Strasen" class="offset-img bottom-right" />
  </div><!-- /content -->

  <a href="" class="work-link hidden">Work \/</a>
</section><!-- /pg-section -->
