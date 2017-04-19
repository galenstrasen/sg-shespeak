
<div class="page intro">
  <div class="check__height js-check__height"></div>
  <div class="intro__canvas set__dimensions">
    <div class="intro__background js-intro__container original-blob" >
      <?php get_template_part('partials-fun/svg/original-blob'); ?>
    </div>
    <!-- <div class="intro__background js-intro__container just-creatures" > -->
      <?php //get_template_part('partials-fun/svg/just-creatures'); ?>
   <!--  </div> -->
  </div><!-- /intro__canvas -->

  <div class="intro__container set__dimensions">
    <div class="intro__content js-content">
      <header>
        <h1 class="h5 whatido"><span class="thing">Web Developer</span> <span class="thing">Front-End</span> <span class="thing">UX</span> <span class="thing">Design</span></h5>
        <h2 class="myname"><span>Galen</span><span> Strasen</span></h2>
        <p class="divider">++++++</p>
      </header>
      <main>
        <?php the_content(); ?>
      </main>
      <footer>
        <a href="mailto:galen@shespeaksincode.com" class="btn">Get in Touch</a>
        <p class="connect-links"><a href="mailto:galen@shespeaksincode.com">galen@shespeaksincode.com</a></p>
      </footer>
    </div>
  </div><!-- intro__container -->

</div><!-- /page -->
