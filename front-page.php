<?php

/**
 * Template Name: Home
 */
get_header(); ?>
<?php require_once __DIR__ . '/template-parts/index-nav.php'; ?>
<div class="container--bg"></div>
<div class="wrapper">
  <?php require_once __DIR__ . '/template-parts/home-intro.php'; ?>
  <?php require_once __DIR__ . '/template-parts/progetto.php'; ?>
  <?php require_once __DIR__ . '/template-parts/memberg.php'; ?>
  <?php require_once __DIR__ . '/template-parts/programma.php'; ?>
</div>
<?php get_footer(); ?>