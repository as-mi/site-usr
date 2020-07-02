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

<nav class="navbar navbar-expand-xl navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/">
    USR
    <?php
    the_custom_logo();
    ?>
    </a>
    <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navCollapse" aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'menu_class' => 'navbar-nav',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'navCollapse',
    ));
    ?>
  </div>
</nav>
