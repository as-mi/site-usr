<?php get_header() ?>

<main>
    <h1 class="hero-title"><?php the_title(); ?></h1>
    <p class="hero-text">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nam et perferendis Eligendi corrupti
      reprehenderit, voluptatibus beatae temporibus corporis modi vero placeat excepturi doloribus deserunt suscipit?
      Assumenda eum quaerat molestiae illo, eius laboriosam quas corrupti, rem voluptatem corporis pariatur aspernatur
      est. Praesentium quis, blanditiis voluptatibus repellendus maiores reiciendis nulla ab.
    </p>

    <div class="carousel-wrapper">
      <div class="carousel"
        data-flickity='{
          "cellAlign": "left",
          "pageDots": false,
          "wrapAround": true
        }'>
        <!-- <div class="carousel-cell">1</div> -->
        <?php
          $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 4, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
          ));
          foreach($recent_posts as $post) : ?>
            <div class="carousel-cell">
              <a href="<?php echo get_permalink($post['ID']) ?>">
                <?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
                <figcaption><?php echo $post['post_title'] ?></figcaption>
              </a>
            </div>
        <?php endforeach; wp_reset_query(); ?>
      </div>
    </div>

  </main>

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<?php get_footer() ?>