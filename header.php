<?php
/**
 * The header for the theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package helen-joy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!--Bootstrap core CSS-->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!--FontAwesome Icons-->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--Styles-->

<?php if( is_page('home') ) : ?>
	<!--p5.js links for image map -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/p5.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/sketch.js"></script>
	<style> #navbar { display:none;} </style>
<?php endif; ?>

<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width">

<?php wp_head(); ?>
  <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries-->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'helen-of-joy' ); ?></a>
	<!--HEADER-->
  <header class="site-header" role="banner" id="topofpage">

    <!--NAVBAR-->
    <div id="navbar" class="navbar-wrapper">
      <div class="navbar <?php if ( is_404() === 'false') { echo 'navbar-inverse'; }; ?> navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a id="logo" class="navbar-brand" href="<?php echo home_url(); ?>"><h2>HELEN OF JOY</h2></a>
          </div>

					<?php
						if (is_page('home')) {
							wp_nav_menu( array(
									'theme_location' => 'home',
									'container' =>	'ul',
									'container_class' => 'navbar-collapse collapse test',
									'menu_class' => 'nav navbar-nav navbar-right',
							)	);
						} else {
							wp_nav_menu( array(
									'theme_location' => 'primary',
									'container' =>	'ul',
									'container_class' => 'navbar-collapse collapse test2',
									'menu_class' => 'nav navbar-nav navbar-right',
							)	);
						}
 					?>
        </div>
      </div>
    </div>
  </header>
