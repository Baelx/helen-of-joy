<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package helen-joy
 */

get_header(); ?>

<section class="section-header">
	<h1 style="color:black;text-shadow:
    -1px -1px 0 #fff,
    1px -1px 0 #fff,
    -1px 1px 0 #fff,
    1px 1px 0 #fff;">Page not found</h1>
</section>

<style>
a, li.current_page_parent a, h2 {
	color:black!important;
	text-shadow:
    -1px -1px 0 #fff,
    1px -1px 0 #fff,
    -1px 1px 0 #fff,
    1px 1px 0 #fff;!important;
}

ul {
	float:right;
}

.icon-bar {
	background-color:black;
}

@media screen and (max-width:430px) {
	#menu-primary-menu {
		border: 1px solid black;
	        border-top-width: 1px;
	        border-top-style: solid;
	        border-top-color: black;
	  margin-top: -1px;
	  border-top: none;
	}
	nav {
		margin-top:-1px;
	}
	.navbar-header {
		border:1px solid black;
	}
	.navbar-nav > li > a {
		background-color:white;
	}
}

</style>

<?php
get_footer();
