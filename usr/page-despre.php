<?php
/*
 * Template Name: About
 * Description: Generate a page with map slider
 */

get_header(); ?>

<main>
    <div class="main-carousel" data-flickity='{ "pageDots": true, "prevNextButtons": false }'>

<?php

const TAG_FORMAT = 'zone-';
const MAX_PARTENERS = 5;

function startsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    return substr( $haystack, 0, $length ) === $needle;
}

$args = array(
    'numberposts' => -1,
    'post_type'   => 'zones'
);

$zones = get_posts( $args );

foreach ($zones as $zone) {
    $partenres = $zone->__get('tags_input');

    // remove tags that not contains TAG_FROMAT format & sanitize
    foreach($partenres as $key => $partener) {
        if(startsWith($partener, TAG_FORMAT)) {
            $partenres[$key] = str_replace(TAG_FORMAT, '', $partener);
        }else {
            unset($partenres[$key]);
        }
    }

    ?>
        <div class="carousel-cell" >
            <div class="pure-g">
                <div class="pure-u-md-1-2 pure-u-1" >
                    <div class="box">
                        <div class="box-content">
                            <h1><?php echo $zone->post_title ?></h1>
                            <p><?php echo get_the_excerpt($zone) ?></p>
                            <a  href="<?php echo get_permalink($zone->ID); ?>" >
                                <button class="pure-button pure-button-primary">Mai multe informatii</button>
                            </a>
                        </div>
                        <div class="box-parteners">
                            <div class="pure-g" >
                        <?php
                            $displayedParteners = 0;
                            foreach($partenres as $partener) {
                            $query = new WP_Query( [
                                'post_type' => 'parteners',
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'post_tag',
                                        'field' => 'slug',
                                        'terms' => 'partener-' . $partener,
                                    ]
                                ]
                            ]);

                            if($query->have_posts()) {
                                while($query->have_posts()) {
                                    $query->the_post();
                                    if($displayedParteners >= MAX_PARTENERS) {
                                        break;
                                    }

                                    echo '
                                    <div class="pure-u-1-' . MAX_PARTENERS . '">
                                    <img class="pure-img" src="' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . '"></div>';
                                    $displayedParteners++;
                                }
                            }
                            ?>
                        <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pure-u-md-1-2 pure-u-1 center ">
                    <a href="<?php echo get_permalink($zone->ID); ?>">
                        <img class="pure-img map "  src="<?php echo get_the_post_thumbnail_url( $zone->ID, 'full' ) ?>">
                    </a>
                </div>
            </div>
        </div>
<?php } // end foreach loop ?>

    </div>
</main>


<?php get_footer(); ?>
