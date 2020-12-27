<?php get_header(); ?>

<main>
    <div class="main-carousel" data-flickity='{ "pageDots": true, "wrapAround": true, "autoPlay": false, "prevNextButtons": false }'>
    <?php
    $args = array(
        'numberposts' => -1,
        'post_type'   => 'projects'
    );

    $projects = get_posts( $args );

    foreach ($projects as $project) {
    ?>
        <div class="carousel-cell" >
            <?php
            // Cache if this project has an image associated with it.
            $has_logo = has_post_thumbnail($project);
            ?>
            <div class="pure-g">
                <div class="pure-u-1 <?php if ($has_logo) { echo "pure-u-lg-1-2"; } ?>">
                    <h2><?php echo $project->post_title ?></h2>
                    <?php echo get_the_excerpt($project) ?>
                    <p><a href="<?php echo get_permalink($project) ?>">Citește mai mult</a></p>
                </div>
                <?php
                if ($has_logo) {
                ?>
                <div class="pure-u-1 pure-u-lg-1-2 project-logo-container">
                    <img
                        class="pure-img project-logo"
                        alt="Imagine proiect"
                        src="<?php echo get_the_post_thumbnail_url( $project->ID, 'full' ) ?>"
                    />
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
</main>

<?php get_footer(); ?>
