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
	color:black !important;
}
ul {
	float:right;
}
.navbar-nav > li > a {
	background-color:white;
}
@media screen and (max-width:430px) {
ul {
	border: 1px solid black;
        border-top-width: 1px;
        border-top-style: solid;
        border-top-color: black;
    margin-top: 0;
    border-top: none;

}
}
}

</style>

<?php
get_footer();
