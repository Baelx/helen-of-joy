<?php
/*
  Template Name: Audio Page
*/

get_header();

// Variables

$video_embed_code = get_field('video_embed_code');


?>



<body class="media-page">
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

    <div>
			<?php echo $video_embed_code; ?>
    </div>
  </div>




<style>
body.page-id-76 {
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
