<!--SHOWS-->
<section id="shows">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-header">
        <h2 class="shows-header">Shows</h2>


        <?php

        // get posts
        $posts = get_posts(array(
          'post_type'			=> 'show',
          'posts_per_page'	=> -1,
          'meta_key'			=> 'show_date',
          'order'				=> 'ASC'
        ));

        if( $posts ): ?>

        <?php foreach( $posts as $post ):

          setup_postdata( $post )

          ?>


          <?php $time = current_time( 'dmY', $gmt = -4 );

          $date = DateTime::createFromFormat('dmY', get_field('show_date'));
          $date1 = $date->format('dmY');
          $date3 = $date->format('jS F Y');

          if($time <= $date1):
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
                <span id="show-date-time"><?php echo $date3 ?>, <?php if (get_field("show_time")): the_field('show_time'); endif; ?></br></span>
                  <span class="show-links">
                    <?php if (get_field("get_directions")): ?>
                      <a href="<?php the_field('get_directions'); ?>">Get Directions</a>
                    <?php endif; ?>
                    <?php if (get_field("event_page")): ?>
                      <a href="<?php the_field('event_page'); ?>">Event Page</a>
                    <?php endif; ?>
                  </span>
                </div>
              </div>

            <?php endif; ?>

          <?php endforeach; ?>

<?php if($time > $date1): ?>
  <p class="no-shows">Stay tuned! More shows coming soon! </p>
<?php endif; ?>

          <?php wp_reset_postdata(); ?>

        <?php endif; ?>


      </div>
    </div>
  </div>
</section>
