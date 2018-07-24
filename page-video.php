<?php
/*
Template Name: Video Page
*/

get_header();

// Variables

$video_embed_code = get_field('video_embed_code');
$second_video_embed_code = get_field('second_video_embed_code');
$third_video_embed_code = get_field('third_video_embed_code');



?>

<div class="container media-page">
  <div>
    <?php echo $video_embed_code; ?>
  </div>
</div>
<div class="container media-page">
  <div>
    <?php echo $second_video_embed_code;?>
  </div>
</div>
<div class="container media-page">
  <div>
    <?php echo $third_video_embed_code; ?>
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
