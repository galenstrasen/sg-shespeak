<?php
/**
 * Template part for displaying navbar
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


<div class="navbar js-nav-guy">
  <div class="wrapper">

    <div class="brand">
      <h3 class="init"><a href="/">GS</a></h3>
    </div><!-- /brand -->

    <ul class="links plus">
      <li><a href="#hello" class="scroll-to">Hello</a></li>
      <li><a href="/cv">CV</a></li>
      <li><a href="">Work</a>
        <ul class="hidden">
          <li><a href="">Recent</a></li>
          <li><a href="">Archives</a></li> <!-- page -->
          <li><a href="">Blog</a></li> <!-- page -->
        </ul>
      </li>
      <li><a href="#connect" class="scroll-to">Connect</a></li> <!-- footer -->
      <li><a href="/styles">Styles</a></li>
      <li><a href="#top-of-the-world" class="scroll-to">Top</a></li> <!-- top of everypage -->
    </ul>

  </div><!-- /wrapper -->
</div><!-- /navbar -->
