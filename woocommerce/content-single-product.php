<?php
/**
 * Contenu fiche produit WooCommerce
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook avant fiche produit
 * Gère notamment les notices WooCommerce
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form();
    return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'single-product-content', $product ); ?>>

    <div class="product-layout">

        <div class="product-gallery-col">
            <?php
            /**
             * Galerie produit
             * @hooked woocommerce_show_product_sale_flash - 10
             * @hooked woocommerce_show_product_images - 20
             */
            do_action( 'woocommerce_before_single_product_summary' );
            ?>
        </div>

        <div class="product-summary-col">
            <?php
            /**
             * Résumé produit
             * @hooked woocommerce_template_single_title - 5
             * @hooked woocommerce_template_single_rating - 10
             * @hooked woocommerce_template_single_price - 10
             * @hooked woocommerce_template_single_excerpt - 20
             * @hooked woocommerce_template_single_add_to_cart - 30
             * @hooked woocommerce_template_single_meta - 40
             * @hooked woocommerce_template_single_sharing - 50
             * @hooked WC_Structured_Data::generate_product_data() - 60
             */
            do_action( 'woocommerce_single_product_summary' );
            ?>
        </div>

    </div>

    <div class="product-bottom-content">
        <?php
        /**
         * Contenu après résumé
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */
        do_action( 'woocommerce_after_single_product_summary' );
        ?>
    </div>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>