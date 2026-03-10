<?php
/**
 * Functions du thème
 * Le Marché Rural
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'LMR_THEME_VERSION' ) ) {
    define( 'LMR_THEME_VERSION', '2.4.0' );
}

/*
|--------------------------------------------------------------------------
| Configuration du thème
|--------------------------------------------------------------------------
*/

function lmr_theme_setup() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'woocommerce' );

    add_theme_support(
        'custom-logo',
        [
            'height'      => 80,
            'width'       => 80,
            'flex-height' => true,
            'flex-width'  => true,
        ]
    );

    register_nav_menus(
        [
            'primary' => __( 'Menu principal', 'le-marche-rural' ),
            'footer'  => __( 'Menu pied de page', 'le-marche-rural' ),
        ]
    );

}

add_action( 'after_setup_theme', 'lmr_theme_setup' );


/*
|--------------------------------------------------------------------------
| Chargement CSS / JS
|--------------------------------------------------------------------------
*/

function lmr_enqueue_assets() {

    wp_enqueue_style(
        'lmr-style',
        get_stylesheet_uri(),
        [],
        LMR_THEME_VERSION
    );

    wp_enqueue_style(
        'lmr-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [ 'lmr-style' ],
        LMR_THEME_VERSION
    );

    wp_enqueue_script(
        'lmr-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        LMR_THEME_VERSION,
        true
    );

}

add_action( 'wp_enqueue_scripts', 'lmr_enqueue_assets' );


/*
|--------------------------------------------------------------------------
| Redirection optionnelle vers la boutique
|--------------------------------------------------------------------------
*/

function lmr_redirect_home_to_shop() {

    if ( is_front_page() && ! is_admin() ) {

        if ( function_exists( 'wc_get_page_id' ) ) {

            $shop_page = wc_get_page_id( 'shop' );

            if ( $shop_page ) {

                wp_redirect( get_permalink( $shop_page ) );
                exit;

            }

        }

    }

}

add_action( 'template_redirect', 'lmr_redirect_home_to_shop' );
