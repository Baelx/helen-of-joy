<?php

// Variables
$featured_song_section_title = get_field('featured_song_section_title');
$bandcamp_html_embed_code = get_field('bandcamp_html_embed_code');
$link_to_audio_page_text = get_field('link_to_audio_page_text');
?>

<!--MUSIC PLAYER-->
<section id="music-player">
  <div class="container">
    <div class="section-header col-sm-6 col-sm-offset-3">
      <h2 id="#music-player-header"><?php echo $featured_song_section_title; ?></h2>
        <?php echo $bandcamp_html_embed_code; ?>
      <a href="<?php echo get_page_link(67); ?>" class="link-to-more"><?php echo $link_to_audio_page_text ; ?></a>
    </div>
  </div>
</section>
