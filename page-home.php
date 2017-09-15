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


  <!--BLOG-->
  <section class="blog" id="blogsection">
    <div class="container">
      <div class="row section-header" id="primary">
        <h2>RECENT BLOG ENTRIES</h2>
        <main id="content" class="col-sm-6" role="main">
          <article class="post">
            <header>
              <h3>
                <a href="post.html">Blog Title Here
                </a>
              </h3>
              <div class="post-details">
                <i class="fa fa-user">Jess</i>
                <i class="fa fa-clock-o">Jan 1, 2017</i>
                <i class="fa fa-folder"></i>
                <a href="">Tutorials</a>
                <a href="">Coding</a>
                <i class="fa fa-tags"></i>
                <a href="">premium</a><a href="">tag   </a><a href="">another tag</a><a href="">sup</a>
                <div class="post-comments-badge">
                  <a href=""><i class="fa fa-comments">168</i></a>
                </div>
              </div>
            </header>
            <div class="post-image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/hero-bg.jpg" alt="Hero image">
            </div>
            <div class="post-excerpt">
              <p>This is the sample blog excerpt for your viewing pleasure. You can read more if you just click on the damn blog you jerk...<a href="post.html">continue reading &raquo;</a></p>
            </div>
          </article>
        </main>
        <main id="content" class="col-sm-6" role="main">
          <article class="post">
            <header>
              <h3>
                <a href="post.html">Blog Title Here
                </a>
              </h3>
              <div class="post-details">
                <<i class="fa fa-user">Jess</i>
                <i class="fa fa-clock-o">Jan 1, 2017</i>
                <i class="fa fa-folder"></i>
                <a href="">Tutorials</a>
                <a href="">Coding</a>
                <i class="fa fa-tags"></i>
                <a href="">premium</a><a href="">tag   </a><a href="">another tag</a><a href="">sup</a>
                <div class="post-comments-badge">
                  <a href=""><i class="fa fa-comments">168</i></a>
                </div>
              </div>
            </header>
            <div class="post-image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/hero-bg.jpg" alt="Hero image">
            </div>
            <div class="post-excerpt">
              <p>This is the sample blog excerpt for your viewing pleasure. You can read more if you just click on the damn blog you jerk...<a href="post.html">continue reading &raquo;</a></p>
            </div>
          </article>
        </main>
        <a href="blog.html" class="link-to-more">Read More...</a>
      </div>
    </div>
  </section>


<?php get_footer(); ?>
