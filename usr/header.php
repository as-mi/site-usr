<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php
  wp_head();
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body
  <?php body_class(); ?>
>

<nav id="top-bar" class="navbar position-sticky">
  <?php
  the_custom_logo();
  ?>

  <?php
  wp_nav_menu(array(
      'theme_location' => 'primary-menu',
      'menu_class' => 'nav',
  ));
  ?>
</nav>
