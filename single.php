<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package helen-joy
 */

get_header(); ?>

<div class="container">
	<div class="row" id="primary">

		<main id="content" class="col-sm-12">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'single');

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
