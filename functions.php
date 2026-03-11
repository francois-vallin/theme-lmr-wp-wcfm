<?php
/**
 * Theme Functions
 *
 * Theme: Le Marché Rural
 * Version: 2.4.1
 * Author: François Vallin
 * Created: 2025-04-08T00:00
 * Updated: 2026-03-12T23:30
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define('LMR_THEME_VERSION', '2.4.1');

/**
 * Theme setup
 */
function lmr_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('woocommerce');

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    register_nav_menus([
        'primary' => __('Menu principal', 'le-marche-rural')
    ]);
}

add_action('after_setup_theme', 'lmr_theme_setup');


/**
 * Styles
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

add_action('wp_enqueue_scripts', 'lmr_enqueue_styles');