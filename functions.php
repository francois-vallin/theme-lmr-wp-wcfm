<?php
/**
 * Theme Functions
 *
 * Theme: Le Marché Rural
 * Version: 2.6.0-dev
 * Author: François Vallin
 * Updated: 2026-03-13T13:10
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'LMR_THEME_VERSION', '2.6.0-dev' );

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
 * Récupère l'ID du vendeur d'un produit.
 *
 * Priorité :
 * 1. WCFM si disponible
 * 2. auteur du produit en fallback
 *
 * @param int $product_id Product ID.
 * @return int
 */
function lmr_get_product_vendor_id( $product_id ) {
    if ( function_exists( 'wcfm_get_vendor_id_by_post' ) ) {
        $vendor_id = (int) wcfm_get_vendor_id_by_post( $product_id );
        if ( $vendor_id > 0 ) {
            return $vendor_id;
        }
    }

    return (int) get_post_field( 'post_author', $product_id );
}

/**
 * Récupère le nom du vendeur d'un produit.
 *
 * @param int $product_id Product ID.
 * @return string
 */
function lmr_get_product_vendor_name( $product_id ) {
    $vendor_id = lmr_get_product_vendor_id( $product_id );

    if ( ! $vendor_id ) {
        return '';
    }

    return (string) get_the_author_meta( 'display_name', $vendor_id );
}

/**
 * Récupère l'URL vendeur d'un produit.
 *
 * @param int $product_id Product ID.
 * @return string
 */
function lmr_get_product_vendor_url( $product_id ) {
    $vendor_id = lmr_get_product_vendor_id( $product_id );

    if ( ! $vendor_id ) {
        return '';
    }

    if ( function_exists( 'wcfmmp_get_store_url' ) ) {
        return (string) wcfmmp_get_store_url( $vendor_id );
    }

    return (string) get_author_posts_url( $vendor_id );
}

/**
 * Bloc vendeur dans les cartes produit.
 */
function lmr_render_loop_vendor() {
    global $product;

    if ( ! $product instanceof WC_Product ) {
        return;
    }

    $product_id  = $product->get_id();
    $vendor_name = lmr_get_product_vendor_name( $product_id );
    $vendor_url  = lmr_get_product_vendor_url( $product_id );

    if ( '' === $vendor_name ) {
        return;
    }

    echo '<div class="lmr-vendor-line">';
    echo '<span class="lmr-vendor-label">' . esc_html__( 'Producteur :', 'le-marche-rural' ) . '</span> ';

    if ( '' !== $vendor_url ) {
        echo '<a class="lmr-vendor-link" href="' . esc_url( $vendor_url ) . '">';
        echo esc_html( $vendor_name );
        echo '</a>';
    } else {
        echo '<span class="lmr-vendor-name">' . esc_html( $vendor_name ) . '</span>';
    }

    echo '</div>';
}
add_action( 'woocommerce_after_shop_loop_item_title', 'lmr_render_loop_vendor', 6 );

/**
 * Bloc vendeur dans la fiche produit.
 */
function lmr_render_single_vendor() {
    if ( ! is_product() ) {
        return;
    }

    global $product;

    if ( ! $product instanceof WC_Product ) {
        return;
    }

    $product_id  = $product->get_id();
    $vendor_name = lmr_get_product_vendor_name( $product_id );
    $vendor_url  = lmr_get_product_vendor_url( $product_id );

    if ( '' === $vendor_name ) {
        return;
    }

    echo '<div class="lmr-single-vendor lmr-card">';
    echo '<strong>' . esc_html__( 'Producteur :', 'le-marche-rural' ) . '</strong> ';

    if ( '' !== $vendor_url ) {
        echo '<a class="lmr-vendor-link" href="' . esc_url( $vendor_url ) . '">';
        echo esc_html( $vendor_name );
        echo '</a>';
    } else {
        echo esc_html( $vendor_name );
    }

    echo '</div>';
}
add_action( 'woocommerce_single_product_summary', 'lmr_render_single_vendor', 25 );