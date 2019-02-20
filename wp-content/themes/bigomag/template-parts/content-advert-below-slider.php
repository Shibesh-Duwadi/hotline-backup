<div class="site_advision_a">
  <?php   
                 $the_query = new WP_Query( array(
      'post_type' => 'advertisement',
      'tax_query' => array(
          array (
              'taxonomy' => 'location',
              'field' => 'slug',
              'terms' => 'below-slider',
          )
      ),
  ) );
               while ( $the_query->have_posts() ) :
              $the_query->the_post();
                   if(has_post_thumbnail($the_query->post->ID)):
                       echo '<div class="img-responsive">';
                       echo '<a href="'.get_the_excerpt($the_query->post->ID).'" target="_blank">';

                       echo '<img src="'.get_the_post_thumbnail_url($the_query->post->ID, 'full').'" />';

                       echo '</a>';
                       echo '</div><br/>';
                   endif;
  endwhile;
  ?>
    <?php wp_reset_postdata();?>
</div>
<div class="clearfix"></div>

