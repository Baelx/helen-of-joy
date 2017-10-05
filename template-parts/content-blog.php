<?php
$args = array(
	'posts_per_page' => 2,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
);
?>

<?php
// the query
$recent_posts = new WP_Query( $args ); ?>


<!--BLOG-->
<section class="blog" id="blogsection">
  <div class="container">
    <div class="row section-header" id="primary">
      <h2>RECENT BLOG ENTRIES</h2>
      <?php if ( $recent_posts->have_posts() ) : ?>

          <!-- pagination here -->

          <!-- the loop -->
          <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>


      <main id="content" class="col-sm-6" role="main">
        <article class="post">
          <header>
            <h3>
              <a href="post.html"><?php the_title(); ?></a>
            </h3>
            <div class="post-details">
              <i class="fa fa-user">Jess</i>
              <i class="fa fa-clock-o">Jan 1, 2017</i>
              <i class="fa fa-folder"></i>
              <a href="">Tutorials</a>
              <a href="">Coding</a>
              <i class="fa fa-tags"></i>
              <p><?php the_tags( 'Tags: ', ', ', '<br />' ); ?></a>
              <div class="post-comments-badge">
                <a href=""><i class="fa fa-comments">168</i></a>
              </div>
            </div>
          </header>
					<?php if ( has_post_thumbnail() ) { ?>
					<div class="post-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- post-image -->
					<?php } ?>
          <div class="post-excerpt">
            <?php the_excerpt(); ?><a href="post.html">continue reading &raquo;</a>
          </div>
        </article>
      </main>

    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p><?php _e( 'No recent posts :\'(' ); ?></p>
    <?php endif; ?>

      <a href="blog.html" class="link-to-more">Read More...</a>
    </div>
  </div>
</section>
