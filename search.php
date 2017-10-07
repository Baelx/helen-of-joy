<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package helen-joy
 */

get_header(); ?>

<header class="page-header">
	<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'helen-of-joy' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</header><!-- .page-header -->

	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-sm-8">
		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->

		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>

	<div>
<div>

<?php
get_footer();
