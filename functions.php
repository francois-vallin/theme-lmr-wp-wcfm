<?php
/**
 * Thème : Le Marché Rural
 * Version actuelle : 2.4.0
 * Version de création du fichier : 0.1.0
 * Auteur : François Vallin
 *
 * Création : 2025-04-08 00:00
 * Dernière modification : 2026-03-11 17:45
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'LMR_THEME_VERSION', '2.4.0' );
define( 'LMR_THEME_URI', get_template_directory_uri() );
define( 'LMR_THEME_PATH', get_template_directory() );

add_action(
    'after_setup_theme',
    function () {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support(
            'woocommerce',
            [
                'thumbnail_image_width' => 300,
                'single_image_width'    => 800,
            ]
        );
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

        add_image_size( 'lmr-square', 600, 600, true );
    }
);

add_action(
    'wp_enqueue_scripts',
    function () {
        wp_enqueue_style(
            'lmr-google-fonts',
            'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap',
            [],
            null
        );

        wp_enqueue_style(
            'lmr-style',
            get_stylesheet_uri(),
            [],
            LMR_THEME_VERSION
        );

        wp_enqueue_style(
            'lmr-gutenberg-front',
            LMR_THEME_URI . '/assets/css/gutenberg-front.css',
            [ 'lmr-style' ],
            LMR_THEME_VERSION
        );

        wp_enqueue_script(
            'lmr-carousel',
            LMR_THEME_URI . '/assets/js/lmr-carousel.js',
            [],
            LMR_THEME_VERSION,
            true
        );
    }
);

add_action(
    'template_redirect',
    function () {
        if ( is_front_page() && ! is_admin() && function_exists( 'wc_get_page_id' ) ) {
            if ( get_option( 'show_on_front' ) !== 'page' ) {
                $shop_id = wc_get_page_id( 'shop' );

                if ( $shop_id ) {
                    wp_safe_redirect( get_permalink( $shop_id ) );
                    exit;
                }
            }
        }
    }
);

add_action(
    'init',
    function () {
        if ( function_exists( 'register_block_pattern_category' ) ) {
            register_block_pattern_category(
                'lmr',
                [
                    'label' => __( 'Le Marché Rural', 'le-marche-rural' ),
                ]
            );
        }

        if ( function_exists( 'register_block_pattern' ) ) {
            $pattern_file = LMR_THEME_PATH . '/patterns/home-accueil.html';

            if ( file_exists( $pattern_file ) ) {
                register_block_pattern(
                    'lmr/homepage',
                    [
                        'title'      => __( 'Accueil – Le Marché Rural (Blocs)', 'le-marche-rural' ),
                        'categories' => [ 'lmr' ],
                        'content'    => file_get_contents( $pattern_file ),
                    ]
                );
            }
        }
    }
);
