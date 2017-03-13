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

<section class="pg-section home-intro">

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

  <div class="intro-vibes -sm-guy">
    <div class="img-bg" style="background-image: url('<?php bloginfo('template_directory');?>/public/images/water1.jpg');"></div>
  </div><!-- small-vibes -->

  <div class="content">
    <h2 class="hero highlight">
      <span>Galen</span><br/>
      <span>Strasen</span>
    </h2>
    <h4 class="sub">Front-End Dev / Creative Mastermind</h4>
    <a href="#hello" class="scroll-to btn btn-black">Hi There</a>
  </div><!-- /content -->

</section><!-- /pg-section -->
