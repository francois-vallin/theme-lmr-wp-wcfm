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
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container row">
        <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/basket.svg' ); ?>" alt="">
            <span><?php bloginfo( 'name' ); ?></span>
        </a>

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
    </div>
</header>
<main class="site-main">
    <div class="container">
