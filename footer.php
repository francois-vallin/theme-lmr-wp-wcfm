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
?>
    </div>
</main>
<footer class="site-footer">
    <div class="container">
        <nav class="footer-nav" aria-label="<?php esc_attr_e( 'Menu pied de page', 'le-marche-rural' ); ?>">
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'footer',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 1,
                    'items_wrap'     => '<ul class="menu">%3$s</ul>',
                ]
            );
            ?>
        </nav>
        <small>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Le Marché Rural — Tous droits réservés.</small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
