<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package helen-joy
 */

get_header(); ?>

<section>
	<h1>Bummer dude</h1>
</section>

<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			<div class="error-404 not-found">
				<div class="page-content">
					<h2>Don't worry - there's no place like <a href="<?php echo esc_url(home_url('/'));?>">home</a>.</h2>
				</div>
			</div>
		</div><!-- content -->
	</div><!-- row -->
</div><!-- container -->

<?php
get_footer();
