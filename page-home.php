<?php
/*
  Template Name: Home Page
*/

get_header(); ?>

  <!--HERO-->

  <section id="hero">

  </section>


  <!--POST-HERO-->

  <section id="post-hero-bar">
    <div class="container">

    </div>
  </section>


<?php get_template_part('template-parts/content','bio'); ?>

<?php get_template_part('template-parts/content','music'); ?>

<?php get_template_part('template-parts/content','video'); ?>

<?php get_template_part('template-parts/content','shows'); ?>

<?php get_template_part('template-parts/content','blog'); ?>

<?php get_footer(); ?>
