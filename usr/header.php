<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php
wp_head();
?>
</head>
<header>
<?php
if ( function_exists( 'the_custom_logo' ) ) {
  the_custom_logo();
}
?>
<?php
wp_nav_menu(array(
    'theme_location' => 'primary-menu',
    'container_class' => 'primary-menu'
));
?>
</header>
<body>
