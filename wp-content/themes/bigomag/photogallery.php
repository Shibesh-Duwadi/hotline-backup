<?php 
/*
*Template Name: Photo gallery
*/
?>
<?php get_header();?>
<section class="news_gallery">
	<div class="news_title gallery_top">
			<h2><a href=""> <span>फोटो </span> ग्यालरी </a></h2>
			<div class="clearfix"></div>
		</div><div class="clearfix"></div>

		 <section class="hotnews_slide gallery_slide">
		 <section class="autoplay slider">
		<?php   
      $the_query = new WP_Query( array(
      'post_type' => 'gallery',
      'posts_per_page'=>'3',
      'tax_query' => array(
          array (
              'taxonomy' => 'gallery_type',
              'field' => 'slug',
              'terms' => 'photo',
                )
        ),
        ) );
        if($the_query->have_posts()):
        while ( $the_query->have_posts() ) :
          $the_query->the_post();?>
				<div class="slick-slide">
					<div class="slide_newsec">
					 <?php 

            $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
             $image_src = $image[0];
             echo '<img src="'.$image_src.'" alt="'.get_the_title().'" class="img-responsive">';
          ?></div>
				</div>
	  <?php
        endwhile;
       
      else :
      echo "No post found 1";
      endif;
        wp_reset_query();
    ?>
			</section>
</section><div class="clearfix"></div><!-- gallery slide end -->

<div class="row">

		<?php   
      $the_query = new WP_Query( array(
      'post_type' => 'gallery',
      'posts_per_page'=>'10',
      'tax_query' => array(
          array (
              'taxonomy' => 'gallery_type',
              'field' => 'slug',
              'terms' => 'photo',
                )
        ),
        ) );
        while ( $the_query->have_posts() ) :
          $the_query->the_post();?>
        	<div class="col-md-4">
		<div class="gallery_thumb_b clearfix">
        <?php 

          echo '<a href="'.get_permalink($post->ID).'">';
               $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
             $image_src = $image[0];
             echo '<img src="'.$image_src.'" alt="'.get_the_title().'" class="img-responsive">';
          echo '</a>';?>
         <h3><a href="<?php echo get_permalink($post->ID);?>"> <?php the_title(); ?></a></h3>
         	</div>
	</div>
         <?php
        endwhile;
        wp_reset_query();
    ?>
			
	


</div><div class="clearfix"></div><!-- thumb gallery section end -->


									</section>
									<div class="clearfix"></div><!--  gallery section end -->
<?php get_footer();?>