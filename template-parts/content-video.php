<?php // Video Variables

$featured_video_section_title = get_field('featured_video_section_title');
$featured_image = get_field('featured_video_background_image');
$video_html_embed_code = get_field('video_html_embed_code');
$link_to_video_page_text = get_field('link_to_video_page_text');

 ?>


<!--VIDEO FEATURETTE-->
<section id="featurette" class="section-block" style="background-image:url(<?php echo $featured_image['url'] ?>);">
  <div class="container">
    <div class="row section-header">
      <div class="col-sm-8 col-sm-offset-2">
        <h2><?php echo $featured_video_section_title; ?></h2>
        <?php echo $video_html_embed_code; ?><br>
        <a href="<?php echo get_page_link(76); ?>" class="link-to-more"><?php echo $link_to_video_page_text; ?></a>
      </div>
    </div>
  </div>
</section>
