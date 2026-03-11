<?php
/**
 * Theme Functions
 *
 * Theme: Le Marché Rural
 * Version: 2.5.0
 * Author: François Vallin
 * Updated: 2026-03-13T10:30
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'LMR_THEME_VERSION', '2.5.0' );

/**
 * Theme setup.
 */
function lmr_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    register_nav_menus(
        [
            'primary' => __( 'Menu principal', 'le-marche-rural' ),
            'footer'  => __( 'Menu secondaire pied de page', 'le-marche-rural' ),
            'legal'   => __( 'Menu légal', 'le-marche-rural' ),
        ]
    );
}
add_action( 'after_setup_theme', 'lmr_theme_setup' );

/**
 * Styles.
 */
function lmr_enqueue_styles() {
    wp_enqueue_style(
        'lmr-style',
        get_stylesheet_uri(),
        [],
        LMR_THEME_VERSION
    );

    wp_enqueue_style(
        'lmr-gutenberg-front',
        get_template_directory_uri() . '/assets/css/gutenberg-front.css',
        [],
        LMR_THEME_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'lmr_enqueue_styles' );

/**
 * Get marketplace vendor name.
 *
 * @param int $product_id Product ID.
 * @return string
 */
function lmr_get_product_vendor_name( $product_id ) {
    $author_id = (int) get_post_field( 'post_author', $product_id );
    if ( ! $author_id ) {
        return '';
    }

    return (string) get_the_author_meta( 'display_name', $author_id );
}

/**
 * Vendor in product cards.
 */
function lmr_render_loop_vendor() {
    global $product;

    if ( ! $product instanceof WC_Product ) {
        return;
    }

    $vendor_name = lmr_get_product_vendor_name( $product->get_id() );
    if ( '' === $vendor_name ) {
        return;
    }

    echo '<p class="lmr-vendor-line"><span class="lmr-badge">' . esc_html__( 'Vendu par', 'le-marche-rural' ) . '</span> ' . esc_html( $vendor_name ) . '</p>';
}
add_action( 'woocommerce_after_shop_loop_item_title', 'lmr_render_loop_vendor', 11 );

/**
 * Vendor in single product page.
 */
function lmr_render_single_vendor() {
    if ( ! is_product() ) {
        return;
    }

    global $product;

    if ( ! $product instanceof WC_Product ) {
        return;
    }

    $vendor_name = lmr_get_product_vendor_name( $product->get_id() );
    if ( '' === $vendor_name ) {
        return;
    }

    echo '<div class="lmr-single-vendor lmr-card"><strong>' . esc_html__( 'Vendu par :', 'le-marche-rural' ) . '</strong> ' . esc_html( $vendor_name ) . '</div>';
}
add_action( 'woocommerce_single_product_summary', 'lmr_render_single_vendor', 25 );
