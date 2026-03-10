<?php
/* Template Name: Accueil – Le Marché Rural */
if ( ! defined('ABSPATH') ) exit;
get_header();
?>

<section class="home-hero">
  <div>
    <h1 class="title"><?php echo esc_html( get_bloginfo('name') ); ?></h1>
    <p class="lead"><?php esc_html_e('Produits fermiers près de chez vous : légumes, œufs, miel, fromages et plus encore.', 'le-marche-rural'); ?></p>
    <div><?php get_search_form(); ?></div>
    <p style="margin-top:.6rem">
      <a class="btn" href="<?php echo esc_url( function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/boutique') ); ?>"><?php esc_html_e('Voir la boutique', 'le-marche-rural'); ?></a>
    </p>
    <div class="badges">
      <span class="badge">Produit local</span>
      <span class="badge">Emballage soigné</span>
      <span class="badge">Satisfait ou remboursé</span>
    </div>
  </div>
  <div>
    <img src="<?php echo esc_url( get_template_directory_uri().'/assets/icons/basket.svg'); ?>" alt="" style="width:100%;max-width:380px;display:block;margin:0 auto;">
  </div>
</section>

<section class="home-section">
  <h2><?php esc_html_e('Catégories phares', 'le-marche-rural'); ?></h2>
  <div class="home-cats">
    <?php
    $top_cats = get_terms([ 'taxonomy'=>'product_cat', 'parent'=>0, 'hide_empty'=>true, 'number'=>6 ]);
    if(!is_wp_error($top_cats) && !empty($top_cats)){
      foreach($top_cats as $cat){
        $thumb_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
        $img = $thumb_id ? wp_get_attachment_image_url($thumb_id, 'thumbnail') : get_template_directory_uri().'/assets/placeholders/panier-legumes.svg';
        echo '<a class="home-cat" href="'. esc_url( get_term_link($cat) ) .'">';
        echo '<img src="'. esc_url($img) .'" alt="">';
        echo '<div class="name">'. esc_html($cat->name) .'</div>';
        echo '</a>';
      }
    } else {
      echo '<p>'.esc_html__('Aucune catégorie trouvée pour le moment.','le-marche-rural').'</p>';
    }
    ?>
  </div>
</section>

<section class="home-section">
  <h2><?php esc_html_e('En promo', 'le-marche-rural'); ?></h2>
  <?php echo do_shortcode('[sale_products limit="8" columns="4"]'); ?>
</section>

<section class="home-section">
  <h2><?php esc_html_e('Nouveautés', 'le-marche-rural'); ?></h2>
  <?php echo do_shortcode('[products limit="8" columns="4" orderby="date" order="DESC"]'); ?>
</section>

<section class="home-section">
  <h2><?php esc_html_e('Du blog', 'le-marche-rural'); ?></h2>
  <div class="home-producers">
  <?php
  $bp = new WP_Query(['post_type'=>'post','posts_per_page'=>3,'post_status'=>'publish']);
  if($bp->have_posts()){
    while($bp->have_posts()){ $bp->the_post();
      echo '<a class="producer-card" href="'.esc_url(get_permalink()).'">';
      echo '<span class="logo">'.( has_post_thumbnail() ? get_the_post_thumbnail(get_the_ID(),'thumbnail',['alt'=>get_the_title()]) : '<img src="'.esc_url( get_template_directory_uri().'/assets/placeholders/panier-legumes.svg').'" alt="">' ).'</span>';
      echo '<span class="meta"><strong>'.esc_html(get_the_title()).'</strong><br><small>'.esc_html( wp_trim_words( get_the_excerpt(), 12 ) ).'</small></span>';
      echo '</a>';
    }
    wp_reset_postdata();
  } else {
    echo '<p>'.esc_html__('Aucun article pour le moment.','le-marche-rural').'</p>';
  }
  ?>
  </div>
</section>

<section class="home-section">
  <div class="trust-band">
    <div class="trust-item">Circuit court & local</div>
    <div class="trust-item">Emballage soigné</div>
    <div class="trust-item">Satisfait ou remboursé</div>
  </div>
</section>

<?php get_footer(); ?>
