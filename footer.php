<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

</main>

<footer class="site-footer">

<div class="container">

<nav class="footer-navigation">

<?php
wp_nav_menu([
    'theme_location' => 'footer',
    'container' => false,
    'menu_class' => 'menu-footer'
]);
?>

</nav>

<p class="site-credit">
© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
</p>

</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>