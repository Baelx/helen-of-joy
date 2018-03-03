<?php
// Bio Variables

$bio_title = get_field('bio_title');
$bio_content = get_field('bio_content');
$bio_background_image = get_field('bio_background_image');
$bio_mobile_background = get_field("bio_mobile_background");
?>

<!--BIO SECTION-->
<style>
#bio-section {
background-image: url(<?php echo $bio_mobile_background['url'] ?>);
}

@media screen and (min-width:772px){
  #bio-section {
    background-image: url(<?php echo $bio_background_image['url'] ?>);
  }
}
</style>
<section id="bio-section" class="section-block" title="<?php echo $bio_background_image['alt'] ?>">
  <div class="container" id="bio-container">
    <div class="section-header">
      <h2 id="bio-header"><?php echo $bio_title; ?></h2>
    </i>
  </div>
  <p class="lead"><?php echo $bio_content; ?></p>
</div>
</section>
