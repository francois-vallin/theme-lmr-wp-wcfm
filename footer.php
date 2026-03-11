<?php
/**
 * Theme: Le Marché Rural
 * Version: 2.5.0
 * Author: François Vallin
 * Updated: 2026-03-13T10:30
 */
?>
    </div>
</main>
<footer class="site-footer" role="contentinfo">
    <div class="container lmr-container">
        <div class="lmr-footer-grid">
            <div>
                <h2 class="lmr-footer-title"><?php bloginfo( 'name' ); ?></h2>
                <p><?php esc_html_e( 'Marketplace locale dédiée aux producteurs et artisans en circuit court.', 'le-marche-rural' ); ?></p>
            </div>

            <nav class="footer-nav" aria-label="<?php esc_attr_e( 'Menu secondaire', 'le-marche-rural' ); ?>">
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

            <nav class="footer-legal-nav" aria-label="<?php esc_attr_e( 'Menu légal', 'le-marche-rural' ); ?>">
                <?php
                wp_nav_menu(
                    [
                        'theme_location' => 'legal',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'depth'          => 1,
                        'items_wrap'     => '<ul class="menu">%3$s</ul>',
                    ]
                );
                ?>
            </nav>
        </div>

        <small class="lmr-footer-copy">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> — <?php esc_html_e( 'Tous droits réservés.', 'le-marche-rural' ); ?></small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
