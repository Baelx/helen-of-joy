<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package helen-joy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
				<i class="fa fa-user"></i> Brad Hussey
				<i class="fa fa-clock-o"></i> <time>August 7, 2014</time>
				<i class="fa fa-folder"></i> <a href="">Tutorials</a>, <a href="">Coding</a>
				<i class="fa fa-tags"></i> Tagged <a href="">wordpress</a>, <a href="">premium</a>, <a href="">another tag</a>, <a href="">yadda yadaa</a>

				<div class="post-comments-badge">
					<a href=""><i class="fa fa-comments"></i> 168</a>
				</div><!-- post-comments-badge -->
			</div><!-- post-details -->

		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'helen-of-joy' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'helen-of-joy' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php helen_of_joy_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
