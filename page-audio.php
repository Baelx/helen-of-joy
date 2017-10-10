<?php
/*
  Template Name: Audio Page
*/

get_header();

//Variables

$audio_embed_code = get_field('audio_embed_code');
$second_audio_embed_code = get_field('second_audio_embed_code');
$third_audio_embed_code = get_field('third_audio_embed_code');

 ?>

   <div class="media-page">
     <div>
       <?php echo $audio_embed_code; ?>
    </div>
    <div>
      <?php echo $second_audio_embed_code; ?>
   </div>
   <div>
     <?php echo $third_audio_embed_code; ?>
  </div>
   </div>

<style>
body.page-id-67 {
background-image:url("<?php if( get_field('background_image') ):
the_field('background_image');
endif; ?>");
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-repeat: no-repeat;
background-position:center;
height:100%;
margin:0;
}
</style>

<?php

get_footer();

?>
