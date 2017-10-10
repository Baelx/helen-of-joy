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
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php
						if ( is_single() ) :
							the_title( '<h3 class="entry-title">', '</h3>' );
						else :
							the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
						endif;

						if ( 'post' === get_post_type() ) : ?>

						<?php if ( has_post_thumbnail() ) { ?>
						<div class="post-image">
							<?php the_post_thumbnail(); ?>
						</div><!-- post-image -->
						<?php } ?>

							<div class="post-details">
								<i class="fa fa-user"></i><?php the_author(); ?>
								<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
								<i class="fa fa-tags"></i> <?php the_tags('',',',''); ?>

								<?php edit_post_link( 'Edit this post', '<i class="fa fa-pencil"></i>', ''); ?>
							</div><!-- post-details -->

							<?php
							endif; ?>
						</header>

							<div class="post-excerpt">
								<?php the_excerpt(); ?><a href="<?php echo get_permalink($post->ID); ?>">continue reading &raquo;</a>
							</div><!-- post-excerpt -->
				</article><!-- #post-## -->
      </main>

    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p><?php _e( 'No recent posts :\'(' ); ?></p>
    <?php endif; ?>



		<div class="col-sm-12">
      <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="link-to-more">Read More...</a>
    </div>
  </div>
</section>
