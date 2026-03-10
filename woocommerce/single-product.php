<?php
/**
 * Template fiche produit
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>

<div class="container product-page">

<?php
while ( have_posts() ) :

the_post();

wc_get_template_part( 'content', 'single-product' );

endwhile;
?>

</div>

<?php

get_footer( 'shop' );