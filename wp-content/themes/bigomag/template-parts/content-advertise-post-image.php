<?php
    $the_query = new WP_Query( array(
        'post_type' => 'advertisement',
        'tax_query' => array(
            array (
                'taxonomy' => 'location',
                'field' => 'slug',
                'terms' => 'below-navigation',
            )
        ),
    ) );
    while ( $the_query->have_posts() ) :
        $the_query->the_post();


        if(has_post_thumbnail($the_query->post->ID)):
            echo '<div class="right_ads_a"><a href="'.get_the_excerpt($the_query->post->ID).'" target="_blank">';

            echo '<img src="'.get_the_post_thumbnail_url($the_query->post->ID, 'full').'" class="img-responsive" />';

            echo '</a></div><div class="clearfix"></div>';
        endif;

    endwhile;
    ?>

