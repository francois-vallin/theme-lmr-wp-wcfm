<?php
/**
 * Fichier de base du thème
 * Le Marché Rural
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Sécurité : empêche l'accès direct
}

get_header();
?>

<div class="site-main container">

<?php
if ( have_posts() ) :

    while ( have_posts() ) :
        the_post();
        ?>

        <article id="post-<?php the_ID(); ?>">

            <h1><?php the_title(); ?></h1>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

        </article>

        <?php

    endwhile;

else :
    ?>

    <p>Aucun contenu pour le moment.</p>

<?php endif; ?>

</div>

<?php
get_footer();