<?php
/*
  Template Name: Home Page
*/

// CUSTOM FIELDS

// Bio Section
$bio_title = get_field('bio_title');
$bio_content = get_field('bio_content');
$bio_background_image = get_field('bio_background_image');

// Audio Section
$featured_song_section_title = get_field('featured_song_section_title');
$bandcamp_html_embed_code = get_field('bandcamp_html_embed_code');
$link_to_audio_page_text = get_field('link_to_audio_page_text');

// Video Section

$featured_video_section_title = get_field('featured_video_section_title');
$featured_video_background_image = get_field('featured_video_background_image');
$video_html_embed_code = get_field('video_html_embed_code');
$link_to_video_page_text = get_field('link_to_video_page_text');


get_header(); ?>


  <!--HERO-->

  <section id="hero">

  </section>


  <!--POST-HERO-->

  <section id="post-hero-bar">
    <div class="container">

    </div>
  </section>

  <!--BIO SECTION-->
  <section id="bio-section" style="background-image: url(<?php echo $bio_background_image['url'] ?>);"
    title="<?php echo $bio_background_image['alt'] ?>">
    <div class="container" id="bio-container">
      <div class="section-header">
        <h2 id="bio-header"><?php echo $bio_title; ?></h2>
      </i>
    </div>
    <p class="lead"><?php echo $bio_content; ?></p>
</div>
</section>


  <!--MUSIC PLAYER-->
  <section id="music-player">
    <div class="container">
      <div class="section-header col-sm-6 col-sm-offset-3">
        <h2 id="#music-player-header"><?php echo $featured_song_section_title; ?></h2>
          <?php echo $bandcamp_html_embed_code; ?>
        <a href="audio.html" class="link-to-more"><?php echo $link_to_audio_page_text ; ?></a>
      </div>
    </div>
  </section>

  <!--VIDEO FEATURETTE-->
  <section id="featurette">
    <div class="container">
      <div class="row section-header">
        <div class="col-sm-8 col-sm-offset-2">
          <h2><?php echo $featured_video_section_title; ?></h2>
          <?php echo $video_html_embed_code; ?><br>
          <a href="video.html" class="link-to-more"><?php echo $link_to_video_page_text; ?></a>
        </div>
      </div>
    </div>
  </section>




  <!--SHOWS-->
  <section id="shows">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 section-header">
          <h2>Shows</h2>

          <?php $loop = new WP_Query(array('post_type' => 'project_feature',
            'orderby' => 'post_id' , 'order' => 'ASC')); ?>

          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

          <?php endwhile; ?>

          <!--Shows go here-->
          <div class="row show">
            <div class="col-sm-6">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/creativemornings.jpg" alt="venue">
            </div>
            <div class="col-sm-4">
              <h3>Creative Mornings</h3>
              <p>Jan. 18th 2017 – L’Escalier @ 10 pm. Downtown, Mtl, QC. Free/Public. </p>
              <span>
              <a href="https://goo.gl/maps/E5oFCxjUtk32">Location</a>
              -
              <a href="www.google.com">Venue's Site</a>
              </span>
            </div>
          </div>
          <!--Shows go here-->
          <div class="row show">
            <div class="col-sm-6">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/show_lescalier.jpg" alt="venue">
            </div>
            <div class="col-sm-4">
              <h3>L'escalier</h3>
              <p>The show is at our favourite venue ever. We love playing for the Commodore he is a very nice man. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <span>
              <a href="https://goo.gl/maps/E5oFCxjUtk32">Location</a>
              -
              <a href="www.google.com">Venue's Site</a>
              </span>
              </div>
          </div>
          <!--Shows go here-->
          <div class="row show">
            <div class="col-sm-6">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="venue">
            </div>
            <div class="col-sm-4">
              <h3>The Commodore Ballroom</h3>
              <p>The show is at our favourite venue ever. We love playing for the Commodore he is a very nice man.</p>
              <span>
              <a href="https://goo.gl/maps/E5oFCxjUtk32">Location</a>
              -
              <a href="www.google.com">Venue's Site</a>
              </span>
            </div>
          </div>
          <!--Shows go here-->
          <div class="row show">
            <div class="col-sm-6">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="venue">
            </div>
            <div class="col-sm-4">
              <h3>The Commodore Ballroom</h3>
              <p>The show is at our favourite venue ever. We love playing for the Commodore he is a very nice man.</p>
              <span>
              <a href="https://goo.gl/maps/E5oFCxjUtk32">Location</a>
              -
              <a href="www.google.com">Venue's Site</a>
              </span>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>


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
