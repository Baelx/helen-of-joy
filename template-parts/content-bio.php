<?php
// Bio Variables

$bio_title = get_field('bio_title');
$bio_content = get_field('bio_content');
$bio_background_image = get_field('bio_background_image');

?>

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
