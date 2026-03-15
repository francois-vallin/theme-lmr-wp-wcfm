<?php
/**
 * Theme: Le Marché Rural
 * Version: 2.5.0
 * Author: François Vallin
 * Updated: 2026-03-13T10:45
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="container lmr-header-row">
        <div class="lmr-header-branding">
            <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/basket.svg' ); ?>" alt="<?php esc_attr_e( 'Logo Le Marché Rural', 'le-marche-rural' ); ?>">
                <span><?php bloginfo( 'name' ); ?></span>
            </a>
        </div>

        <nav class="primary-nav" aria-label="<?php esc_attr_e( 'Menu principal', 'le-marche-rural' ); ?>">
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'primary',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 1,
                    'items_wrap'     => '<ul class="menu">%3$s</ul>',
                ]
            );
            ?>
        </nav>

        <div class="lmr-header-actions">
            <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                <a class="lmr-cart-link lmr-badge" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
                    <?php
                    printf(
                        /* translators: %d: cart items count */
                        esc_html__( 'Panier (%d)', 'le-marche-rural' ),
                        intval( WC()->cart ? WC()->cart->get_cart_contents_count() : 0 )
                    );
                    ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>

<main class="site-main">
    <div class="container lmr-container">
