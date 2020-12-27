<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>

</head>

<body class="<?php echo get_body_class(); ?> <?php if (is_user_logged_in()) { echo 'logged-in'; } ?>">
  <header class="pure-menu pure-menu-horizontal">
    <svg class="header-menu-btn hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
      <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#020202">
        <path d="M3 12h18"></path>
        <path d="M3 6h18"></path>
        <path d="M3 18h18"></path>
      </g>
    </svg>

    <a href="/">
      <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo USR">
    </a>

    <ul class="header-nav pure-menu-list">
      <li class="pure-menu-item"><a href="/" class="pure-menu-link">Acasa</a></li>
      <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
        <a href="/despre" class="pure-menu-link">Despre</a>
        <ul class="pure-menu-children">
          <li class="pure-menu-item"><a href="/cons-dir" class="pure-menu-link">Consiliu Director</a></li>
          <li class="pure-menu-item"><a href="/structura" class="pure-menu-link">Structura</a></li>
          <!--
            <li class="pure-menu-item"><a href="/statut" class="pure-menu-link">Statut</a></li>
          -->
          <li class="pure-menu-item"><a href="https://uniunea.ro/istoric/statutul-usr/" class="pure-menu-link">Statut</a></li>
        </ul>
      </li>
      <li class="pure-menu-item"><a href="/proiecte" class="pure-menu-link">Proiecte</a></li>
      <!--
        TODO: finish members page
      <li class="pure-menu-item"><a href="/membri" class="pure-menu-link">Membri</a></li>
      -->
      <!--
        TODO: finish trainings page
      <li class="pure-menu-item"><a href="/traininguri" class="pure-menu-link">Training-uri</a></li>
      -->

      <!--
        TODO: finish news page
      <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
        <a href="/news" class="pure-menu-link">News</a>
        <ul class="pure-menu-children">
          <li class="pure-menu-item"><a href="/blog" class="pure-menu-link">Blog</a></li>
        </ul>
      </li>
      -->

      <!--
        TODO: finish announcements page
      <li class="pure-menu-item"><a href="/comunicate" class="pure-menu-link">Comunicate</a></li>
      -->
      <li class="pure-menu-item"><a href="/parteneri" class="pure-menu-link">Parteneri</a></li>
      <li class="pure-menu-item"><a href="/contact" class="pure-menu-link">Contact</a></li>
    </ul>
    <div class="header-divider">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path
          d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
          class="shape-fill"></path>
      </svg>
    </div>
  </header>
