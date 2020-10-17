<?php
/*
 * Template Name: Pagina Prezentare Persoana
 * description: Genereaza o pagina cu informatii despre o anumita persoana
 */

get_header(); ?>

<!-- CITESTE FISIERUL README.md PENTRU A VEDEA CUM SA CREEZI O PAGINA DE PREZENTARE -->


<main>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="textbox left-textbox">
      <h1 class="hero-title"><?php the_title(); ?></h1>
      <h2 class="hero-title">Istoric</h2>
      <div class="carousel-element">
        <div class="carousel-wrapper">
          <div class="carousel"
            data-flickity='{
              "cellAlign": "left",
              "pageDots": false,
              "wrapAround": true
            }'>
            <!-- <div class="carousel-cell">1</div> -->
          </div>
        </div>
      </div>
      <!-- JS will inject elements here -->
    </div>
    <div class="textbox right-textbox">
    <!-- JS will inject elements here -->
    </div>
    <div class="data">
      <?php the_content(); ?>
    </div>
  <?php endwhile; // end of the loop. ?>
</main>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/inject-prez-pers.js"></script>

<?php get_footer(); ?>