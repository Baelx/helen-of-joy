<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package helen-joy
*/

?>

<?php wp_footer(); ?>


<!--FOOTER-->
<?php if( is_page('home') ) : ?>

<footer>
	<div class="container">
		<nav>
			<ul class="list-unstyled list-inline footer-text">
				<?php
				wp_nav_menu( array(
						'theme_location' => 'footer',
						'container' =>	'nav',
						'menu_class' => 'list-unstyled list-inline',
				)	);
				?>
			</ul>
		</nav>
	</div>
</div>

</footer>
<?php endif; ?>



<!-- BOOTSTRAP CORE JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<?php if( is_page('home') ) : ?>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<?php endif; ?>

</body>
</html>
