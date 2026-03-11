<?php
/**
 * Thème : Le Marché Rural
 * Version actuelle : 2.4.0
 * Version de création du fichier : 2.4.0
 * Auteur : François Vallin
 *
 * Création : 2026-03-11 17:45
 * Dernière modification : 2026-03-11 17:45
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>
<header class="archive-header">
    <h1><?php the_archive_title(); ?></h1>
    <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
</header>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
        </article>
        <?php
    endwhile;
else :
    ?>
    <p><?php esc_html_e( 'Aucun contenu trouvé.', 'le-marche-rural' ); ?></p>
    <?php
endif;

get_footer();
