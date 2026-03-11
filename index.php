<?php
if ( ! defined('ABSPATH') ) exit;
get_header();
if(have_posts()): while(have_posts()): the_post();
  echo '<article id="post-'.get_the_ID().'" '; post_class(); echo '>';
  echo '<h1>'.get_the_title().'</h1>';
  echo '<div class="entry-content">'; the_content(); echo '</div></article>';
endwhile; else:
  echo '<p>'.esc_html__('Aucun contenu pour le moment.','le-marche-rural').'</p>';
endif;
get_footer();
?>