<?php
/*
  Template Name: Audio Page
*/

get_header();

?>



<body id="videopage">
  <!--HEADER-->
  <header class="site-header" role="banner">
    <!--NAVBAR-->
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a id="logo" class="navbar-brand" href="index.html"><h2>HELEN OF JOY</h2></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="audio.html">Audio</a></li>
              <li><a href="video.html">Video</a></li>
              <li><a href="index.html#shows">Shows</a></li>
              <!--need to fix this to point to the shows location on the main page later-->
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html"> Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container media-page">
    <div class="embed-responsive embed-responsive-16by9" id="videopageplayer"> <iframe class="media-player embed-responsive-item" width="1100" height="600" src="https://www.youtube.com/embed/videoseries?list=PLDqwCs9mq6hxFB32sJnqQIGMwnz_Rp7lz" frameborder="0" allowfullscreen>
      </iframe>
    </div>
  </div>




<style>
body.page-id-67 {
background-image:url("<?php if( get_field('background_image') ):
the_field('background_image');
endif; ?>");
background-position: center;
background-size: cover;
height:100%;
margin:0;
}
</style>

<?php

get_footer();

?>
