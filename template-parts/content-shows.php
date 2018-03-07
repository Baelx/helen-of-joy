<?php
// Show Variables
$show = "example";

?>

<!--SHOWS-->
<section id="shows">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-header">
        <h2>Shows</h2>


        <?php

        // get posts
        $posts = get_posts(array(
          'post_type'			=> 'show',
          'posts_per_page'	=> 4,
          'meta_key'			=> 'show_date',
          'order'				=> 'DESC'
        ));

        if( $posts ): ?>

        <?php foreach( $posts as $post ):

          setup_postdata( $post )

          ?>

          <div class="row show">
            <div class="col-sm-6">
              <?php  if (  has_post_thumbnail() ) {//check for post image
                the_post_thumbnail( array(200,200) );
              }
              ?>
            </div>
            <div class="col-sm-4">
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
              <span id="show-date-time"><?php  $date = DateTime::createFromFormat('dmY', get_field('show_date')); echo $date->format('D jS F Y'); ?>, <?php the_field('show_time'); ?></br></span>
              <span class="show-links">

                
                	<a href="<?php the_field('get_directions'); ?>">Get Directions</a>



                	<a href="<?php the_field('event_page'); ?>">Event Page</a>


              </span>
            </div>
          </div>

        <?php endforeach; ?>

        <?php wp_reset_postdata(); ?>

      <?php endif; ?>


    </div>
  </div>
</div>
</section>
