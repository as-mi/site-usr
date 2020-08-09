<?php get_header() ?>

<main class="textbox">
    <h1 class="hero-title"><?php the_title(); ?></h1>

      <div class="proiecte-carousel carousel"
          data-flickity='{
            "imagesLoaded": true,
            "pageDots": true,
            "wrapAround": true,
            "autoPlay": true,
            "prevNextButtons": false
          }'>
        
          <!-- <div class="carousel-cell">1</div> -->

          <div class="proiecte-cell carousel-cell">
            <div class="content-wrapper">
              <div class="text-content">
                <h2>Academia de Training USR</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum quae culpa voluptatum, ipsum voluptate magnam! Ea illum quis voluptatum exercitationem autem doloribus omnis fugiat eaque quam dolore necessitatibus assumenda molestiae eum odio eligendi, rerum deleniti temporibus aut consequatur sed fuga. Fuga maiores at minima repudiandae eligendi sequi quia dolorum dignissimos.</p>
              </div>

              <div class="img-content">
                <div class="img-carousel carousel" 
                data-flickity='{
                  "imagesLoaded": true,
                  "wrapAround": true,
                  "autoPlay": true,
                  "pageDots": false,
                  "draggable": false
                }'>
                  <img class="carousel-cell img-cell" src="https://picsum.photos/500/350?random=6" alt="Poza Test">
                  <img class="carousel-cell img-cell" src="https://picsum.photos/500/350?random=7" alt="Poza Test">
                  <img class="carousel-cell img-cell" src="https://picsum.photos/500/350?random=8" alt="Poza Test">
                </div>
              </div>
            </div>

            <button class="btn-primary"><a href="#">Vezi editiile trecute</a></button>
          </div>

          <div class="proiecte-cell carousel-cell">
            <div class="content-wrapper">
              <div class="text-content">
                <h2>Alt Proiect USR</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum quae culpa voluptatum, ipsum voluptate magnam! Ea illum quis voluptatum exercitationem autem doloribus omnis fugiat eaque quam dolore necessitatibus assumenda molestiae eum odio eligendi, rerum deleniti temporibus aut consequatur sed fuga. Fuga maiores at minima repudiandae eligendi sequi quia dolorum dignissimos.</p>
              </div>

              <div class="img-content">
                <div class="img-carousel carousel" 
                data-flickity='{
                  "imagesLoaded": true,
                  "wrapAround": true,
                  "autoPlay": true,
                  "pageDots": false,
                  "draggable": false
                }'>
                  <img class="carousel-cell img-cell" src="https://picsum.photos/500/350?random=2" alt="Poza Test">
                  <img class="carousel-cell img-cell" src="https://picsum.photos/500/350?random=3" alt="Poza Test">
                  <img class="carousel-cell img-cell" src="https://picsum.photos/500/350?random=4" alt="Poza Test">
                </div>
              </div>
            </div>

            <button class="btn-primary"><a href="#">Vezi editiile trecute</a></button>
          </div>

      </div>

      

      
</main>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-fullscreen@1/fullscreen.js"></script>

<?php get_footer() ?>