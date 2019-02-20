<?php get_header();?>

<?php  $author = get_queried_object();
$aboutme_id = $author->ID;
?>
<section class="listing_content">
     <div class="container"><div class="row">
      <div class="col-md-8">
        <div class="site_left_listing clearfix">
                
      <div class="row post-author-wrapper"> 
      <div class="post-author-images col-md-3">
               
    <?php if(get_avatar_url($author->ID)):?>
      <p>
                    <img src="<?php echo get_avatar_url($author->ID,'200');?>" class="img-responsive avatar img-circle" alt="" > 
                  </p>
                  
                    
                    <?php else : ?>
                      <p>
                      <img src="<?php echo get_field('user_profile_image',"user_".$author->ID);?>" class="img-responsive avatar" alt="" > 
                    </p>
                    <?php endif;?>
           <div class="post-author-title">
      
      
          <?php echo $author->display_name; ?>
      </div>
           
        
            <div class="clearfix"></div>
         </div>

         <div class="col-md-9 post-author-description">
          <p>
            <?php echo get_the_author_meta( 'user_description', $author->ID); ?>
          </p>
          <div class="social-block clearfix">
            <h3>सामाजिक सन्जाल</h3>
                         <?php 
                                $facebook_url = get_field('facebook_url',"user_".$aboutme_id);
                                $twitter_url = get_field('twitter_url',"user_".$aboutme_id);
                                $linkedin_url = get_field('linkedin_url',"user_".$aboutme_id); 
                                $google_plus = get_field('google_plus',"user_".$aboutme_id);
                                $youtube_channel = get_field('youtube_channel',"user_".$aboutme_id);  
                          ?>
                        <ul>
                          <?php if(!empty($facebook_url)):?>
                          <li><a href="<?php echo $facebook_url;?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                          <?php endif;?>
                          <?php if(!empty($twitter_url)):?>
                          <li><a href="<?php echo $twitter_url;?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                          <?php endif;?>
                          <?php if(!empty($linkedin_url)):?>
                          <li><a href="<?php echo $linkedin_url;?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                          <?php endif;?>
                          <?php if(!empty($google_plus)):?>
                          <li><a href="<?php echo $google_plus;?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                          <?php endif;?>
                          <?php if(!empty($youtube_channel)):?>
                          <li><a href="<?php echo $youtube_channel;?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                          <?php endif;?>
                        </ul><div class="clearfix"></div>
                      </div><!-- social end -->
         </div>
       
    </div>
         <h2><?php echo $author->display_name,"  "; ?>  बाट समाचार </h2>

          <?php

     


       
						if (have_posts()) : while (have_posts()) : the_post();?>
          <aside class="listing_a">
            <div class="row">

              <div class="col-md-4">
          
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

              <div class="col-md-8">
                <div class="list_r_content clearfix">
                    <h3><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
                    <p> <?php the_excerpt(); ?></p>
                </div>
              </div>
            </div>
          </aside>
          <div class="clearfix"></div><!-- listing a end -->
                <?php
                endwhile;
            understrap_pagination();
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