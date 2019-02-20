	<?php   
	               $the_query = new WP_Query( array(
	    'post_type' => 'advertisement',
	    'tax_query' => array(
	        array (
	            'taxonomy' => 'location',
	            'field' => 'slug',
	            'terms' => 'aside-slider',
	        )
	    ),
	) );?>
	<?php if($the_query->have_posts()):?>
<aside class="gads_view">
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
  ?>
	</aside><div class="clearfix"></div><!-- ads end -->
<?php endif;?>