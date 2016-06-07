<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );


define('_URL_IMAGES', get_stylesheet_directory_uri().'/assets/images/');


function testPourriATitreDexemple() {

}

// --> Premier test pour actions
    add_action('woocommerce_single_product_summary', 'testPourriATitreDexemple', 15);

// --> Changement d'ordre on met le prix au dessus du titre
    // 1. Supprime l'action initiale d'affichage du titre
        remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    // 2. Je change sa priorité
        add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 1);


// --> Titre du produit sur l'image...
    // 1. On enleve le titre du produit du DIV concerné
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
    // 2. fonction rajouté dans le fichier single-product/product-image.php

function my_slider() {
    if (is_front_page() || is_home())
    {
        get_template_part( 'template-parts/slider' );

    }
}
add_action('foundationpress_after_header', 'my_slider', 10);


if (function_exists('add_image_size')) {
     add_image_size('extrait', 470, 270, true);
}
function new_excerpt_length($length){
    return 20;
}
add_filter('excerpt_length','new_excerpt_length');
define ('Form_contact','[contact-form-7 id="163" title="Contact form 1"]');

add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );

/**
 * woo_custom_product_searchform
 *
 * @access      public
 * @since       1.0
 * @return      void
*/
function woo_custom_product_searchform( $form ) {

	$form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
		<div>

			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Recherche', 'woocommerce' ) . '" />
			<button type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'woocommerce' ) .'" > <img src="'. get_stylesheet_directory_uri().'/assets/images/icons/loupe.png" alt=""></button>
			<input type="hidden" name="post_type" value="product" />
		</div>
	</form>';

	return $form;

}function textdomain_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'sidebar-1',
			'name' => __( 'filtres-woo', 'textdomain' ),
			'description' => __( 'Filtres woocommerces', 'textdomain' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s small-12 large-offset-1 large-3 columns end">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);     
}
add_action( 'widgets_init', 'textdomain_register_sidebars' );
