<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark">

		<?php if ('container' == $container) : ?>
			<div class="container-fluid" >
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if (!has_custom_logo()) { ?>
							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="AGE ON"></a></h1>
					<?php 
			} else {
				the_custom_logo();
			} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
				<nav id="nav">
					<ul class="list-unstyled">
						<li><a href="#">STORIES</a></li>
						<li><a href="#">GET INVOLVED</a></li>
						<li><a href="#">IMPACT</a></li>
						<li><a href="#">NEWS</a></li>
						<li><a href="#">PARTNERS</a></li>
						<li class="btn_pledge"><a href="#">Pledge Now</a></li>
					</ul>
				</nav>
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'navbarNavDropdown',
					'menu_class' => 'navbar-nav ml-auto',
					'fallback_cb' => '',
					'menu_id' => 'main-menu',
					'depth' => 2,
					'walker' => new Understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
			<?php if ('container' == $container) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->