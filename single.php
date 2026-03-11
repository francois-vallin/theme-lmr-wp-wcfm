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

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
endif;

get_footer();
