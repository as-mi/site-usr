<?php get_header() ?>

<main class="textbox">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
      <?php endwhile; ?>

      <?php else : ?>
      <h2 class="center">Not Found</h2>
      <p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
    <?php endif; ?>
  </main>

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<?php get_footer() ?>