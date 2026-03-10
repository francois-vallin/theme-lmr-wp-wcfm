<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">

<label class="screen-reader-text" for="s">
<?php _e('Recherche pour :', 'le-marche-rural'); ?>
</label>

<input
type="search"
id="s"
class="search-field"
placeholder="Rechercher…"
value="<?php echo get_search_query(); ?>"
name="s"
/>

<button type="submit" class="search-submit">
Chercher
</button>

</form>