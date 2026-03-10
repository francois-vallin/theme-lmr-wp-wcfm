<?php
/**
 * Archive produits WooCommerce
 */

defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="container">

<?php
/**
 * Hook WooCommerce : avant contenu principal
 */

do_action( 'woocommerce_before_main_content' );
?>

<header class="woocommerce-products-header">

<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

<h1 class="woocommerce-products-header__title page-title">

<?php woocommerce_page_title(); ?>

</h1>

<?php endif; ?>

<?php
/**
 * Description catégorie
 */

do_action( 'woocommerce_archive_description' );
?>

</header>

<?php if ( woocommerce_product_loop() ) : ?>

<?php
/**
 * Résultat + tri
 */

do_action( 'woocommerce_before_shop_loop' );

woocommerce_product_loop_start();

if ( wc_get_loop_prop( 'total' ) ) {

while ( have_posts() ) {

the_post();

do_action( 'woocommerce_shop_loop' );

wc_get_template_part( 'content', 'product' );

}

}

woocommerce_product_loop_end();

do_action( 'woocommerce_after_shop_loop' );

?>

<?php else : ?>

<?php do_action( 'woocommerce_no_products_found' ); ?>

<?php endif; ?>

<?php
/**
 * Sidebar WooCommerce
 */

do_action( 'woocommerce_sidebar' );
?>

</div>

<?php

get_footer();