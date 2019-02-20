
    <?php
    $the_query = new WP_Query( array(
        'post_type' => 'advertisement',
        'tax_query' => array(
            array (
                'taxonomy' => 'location',
                'field' => 'slug',
                'terms' => 'below-post-body',
            )
        ),
    ) );
    while ( $the_query->have_posts() ) :
        $the_query->the_post();
       ;
        echo '<div class="img-responsive">';

        if(has_post_thumbnail($the_query->post->ID)):
            echo '<a href="'.get_the_excerpt($the_query->post->ID).'" target="_blank">';

            echo '<img src="'.get_the_post_thumbnail_url($the_query->post->ID, 'full').'" />';

            echo '</a>';
        endif;

    endwhile;
    wp_reset_postdata();
    ?>


