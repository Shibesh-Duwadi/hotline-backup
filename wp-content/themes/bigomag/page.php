<?php get_header();?>


<section class="listing_content">
     <div class="container"><div class="row">
      <div class="col-md-9">
        <div class="site_left_listing clearfix">
          <h2> <?php echo get_the_title();?></h2>
          <?php

     


       
						if (have_posts()) : while (have_posts()) : the_post();?>
          <aside class="listing_a">
            <div class="row">
              <div class="col-md-12">
                <div class="list_l_content clearfix">

						      <?php // get_template_part( 'content', 'page' );
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);


             if(!empty($image)){
                                  $image_src = $image[0];
                              }
                              else{
                                  $image_src ="";
                              }?>
					 <a href="<?php the_permalink();?>">
						 <?php 

						 echo '<img src="'.$image_src.'" alt="'.get_the_title().'" >'; ?></a>
                 <!-- <div class="news_share clearfix">
                    <ul>
                      <li><a href="https://www.facebook.com/"> <i class="fa fa-facebook-official" aria-hidden="true"></i> </a></li>
                      <li><a href="https://twitter.com/"> <i class="fa fa-twitter-square" aria-hidden="true"></i> </a></li>
                    </ul>
                  </div>-->
                </div>
              </div>

              <div class="col-md-12">
                <div class="list_r_content clearfix">
                    <h3><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
                    <p> <?php the_content(); ?></p>
                </div>
              </div>
            </div>
          </aside>
          <div class="clearfix"></div><!-- listing a end -->
                <?php
                endwhile;
            
             else :
                            echo "<p> Sorry No post found !</p>";
                endif;
                ?>
          <?php

				wp_reset_query();

				?>


         <div class="clearfix"></div><!-- pagination end -->

        </div><!-- left content end -->
      </div><!-- left listing content end -->

     <?php get_sidebar();?>
    </div></div>
   </section><div class="clearfix"></div><!-- listing page content end -->
<?php get_footer();?>