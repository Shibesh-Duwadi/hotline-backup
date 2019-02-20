<div class="right_ads_a">
 <?php   
      $the_query = new WP_Query( array(
      'post_type' => 'advertisement',
      'tax_query' => array(
          array (
              'taxonomy' => 'location',
              'field' => 'slug',
              'terms' => 'right-top',
                )
        ),
        ) );
        while ( $the_query->have_posts() ) :
          $the_query->the_post();
          echo '<a href="">';
               $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
             $image_src = $image[0];
             echo '<img src="'.$image_src.'" alt="'.get_the_title().'" class="img-responsive">';
          echo '</a>';
        endwhile;
    ?>
<div class="clearfix"></div>