<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css" media="screen" title="no title" charset="utf-8">
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700,300' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header row" role="banner">

		<section>
			<div class="top-bar-section">
				<ul class="recherche row">
						<li class="large-6 columns rech">
							<?php get_product_search_form( $echo = true );?>
						</li>
						<li class="large-1 large-offset-4 columns avatar">
							<a  href=" http://localhost:8080/ecommerce/my-account"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/avatar.png" alt="logo" /></a>
						</li>
						<li class="large-1 columns panier">
							<a href="  http://localhost:8080/ecommerce/cart"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/panier.png" alt="logo" /></a>
							<?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
						</li>
				</ul>
			</div>
			<div class="logo-full">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sources/logo.svg" alt="logo" /></a>
			</div>
		</section>
		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-section">
				<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
			</div>
		</nav>
	</header>


	<section class="container">
		<?php
				// --> Injection slider my_slider 10
				do_action( 'foundationpress_after_header' );
			 if (is_home()){
					include('nouveautes.php');
				}
