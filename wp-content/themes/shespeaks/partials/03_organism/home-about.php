<?php
/**
 * Template part for displaying about content on frontpage
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

<section class="pg-section section-about" style="padding-bottom: 5rem;" id="hello">
  <div class="container-fluid no-gutter">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="content-box">
          <!-- <h5>Hello, I am</h5> -->
          <h2 class="highlight" style="margin-bottom: 5rem;"><span>Hi There</span></h2>
          <p class="aqua hidden">++++++</p>
          <p>I'm Galen Strasen, a Front-End Developer based in dreamy Oakland, California.</p>
          <p>For the past 4 years I have had the pleasure of  working at TMBR - a rad little Creative Agency based in Jackson Hole, Wyoming. My focus has been in WordPress websites, where I am not only tasked with recreating beautiful web designs in code, but architecting custom content management systems tailored to the unique needs of each client. Want to know more? View the websites I consider to be my personal favorites, check out my CV or drop me a line!  </p>
          <p><a href="mailto:gstrasen@gmail.com" class="btn">Get in Touch</a></p>

          <p><a href="" class="underline">Call me / Beep me: 917.816.5093</a><br/>
          <a href=""> Connect on LinkedIn</a></p>
          <img src="<?php bloginfo('template_directory');?>/public/images/headshot.jpg" alt="Galen Strasen" class="offset-img bottom-right" />
        </div>
      </div><!-- /col -->
    </div><!-- /row -->
  </div><!-- /container-fluid -->
</section><!-- /section-about -->