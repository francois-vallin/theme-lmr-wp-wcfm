<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header">

<div class="container header-inner">

<a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">

<?php
if ( function_exists('the_custom_logo') && has_custom_logo() ) {
    the_custom_logo();
} else {
    bloginfo('name');
}
?>

</a>

<nav class="main-navigation">

<?php
wp_nav_menu([
    'theme_location' => 'primary',
    'container' => false,
    'menu_class' => 'menu'
]);
?>

</nav>

</div>

</header>

<main class="site-main">