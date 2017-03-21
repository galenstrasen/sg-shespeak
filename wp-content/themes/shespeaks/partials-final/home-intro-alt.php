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
        <?php the_content(); ?>
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
