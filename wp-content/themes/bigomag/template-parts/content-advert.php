<!-- <div class="site_advision_a">
	<img src="<?php echo get_template_directory_uri();?>/assets/images/advertise/a2.png" class="img-responsive">
</div>
<div class="clearfix"></div> -->
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
        ) );?>
        <?php if($the_query->have_posts()):?>
<div class="site_advision_a">
	<?php
        while ( $the_query->have_posts() ) :
          $the_query->the_post();
          echo '<a href="">';
          echo '<div class="img-responsive">';
               $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
             $image_src = $image[0];
             echo '<img src="'.$image_src.'" alt="'.get_the_title().'">';
          echo '</div>';
          echo '</a>';
        endwhile;
        wp_reset_query();
    ?>
</div>
<div class="clearfix"></div>
<?php endif;?>

	