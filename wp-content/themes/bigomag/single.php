<?php
/**
Template Name: single-inner
 */

?>
<?php get_header();?>

    <section class="listing_content">
        <div class="container">
        	<?php while (have_posts()): the_post();?>

										            <?php get_template_part('template-parts/content', 'advert');?>

										          <div class="row">
											          <div class="col-md-8">
											            <div class="single_wrap clearfix">
											                <h2><?php echo get_the_title() ?> </h2>
															<?php if (function_exists('the_subheading')) { the_subheading('<p style="font-weight: 600; font-size: 20px; color: #666666;">', '</p>'); } ?>
											                <div class="clearfix"></div>
                                                            <?php //if(!empty(get_field('sub_heading',$post->ID))):?>
											                <h3><?php //echo get_field('sub_heading',$post->ID);?></h3>
                                                            <?php// endif;?>

											                <div class="clearfix"></div>

											                <div class="mix_col">
											                  <ul>
															
		  <?php if(!empty(get_field('reporter_name',$post->ID))):?>
<li>
											                      <h5><?php echo get_field('reporter_name',$post->ID);?></h5>
											                    </li>
<?php else:?>
	<li>
											                      <h5><?php if(empty(get_the_author_meta( 'display_name' ))):?>
				Admin
				<?php else :?>
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_the_author_meta( 'display_name' ) ?></a>
				<?php endif;?></h5>
<?php 
endif;?>
											                  <li>        <?php 
                       $post_date = new Nepali_Calendar();
                       $nepali_date = $post_date->eng_to_nep(get_the_time('Y', $post->ID),get_the_time('m', $post->ID),get_the_time('d', $post->ID));

$number = array('0','1','2',3,'4','5','6','7','8','9');
$nepali =array('०','१','२','३','४','५','६','७','८','९');
$day =  str_replace($number,$nepali,$nepali_date['date']);
$year =str_replace($number,$nepali,$nepali_date['year']);
$display = $day.' '. $nepali_date['month_name'].',  '.$year;   ?>   
											                   <h5>
											                     <?php echo $display;echo get_field('repoter_name',$post->ID);?>
																	 
											                    </h5>
											                    </li>
											                    <li>
                                                                  <div class="sharethis-inline-share-buttons"></div><div class="clearfix"></div>
											                    </li>
											                  </ul><div class="clearfix"></div>
											                </div><div class="clearfix"></div><!-- mix column end -->
                                                            <?php if (has_post_thumbnail($post->ID)): ?>
                                                        
                                                                    <div class="site_slide_news clearfix">
                                                                        <div class="main_images img-responsive" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>);">
                                                                        </div>
                                                                    </div>
                                                               
                                                            <?php endif;?>
                                                            <?php get_template_part('template-parts/content', 'advertise-post-image');?>

											               <div class="clearfix"></div>

											                <div class="single_content">

						                                       <?php get_template_part('template-parts/content','aside-post');?>
                                                                 <?php the_content();?>
											                </div><div class="clearfix"></div>
                                                            <?php get_template_part('template-parts/cotent','advertise-post-below');?>

 <div class="site_news_comment">
											                	<h5>
											   फेसबुकबाट तपाईको प्रतिक्रिया</h5>
														<?php echo do_shortcode('[TheChamp-FB-Comments ]') ?>
											                  
											                </div><div class="clearfix"></div>


											                
                                                                  <?php  
															$terms = get_the_terms( $post->ID, 'category' );
if ( !empty( $terms ) ){
    // get the first term
    $term = array_shift( $terms );
    $term_id = $term->term_id;
}
	
															
      $catquery = new WP_Query( array(
      'post_type' => 'post',
		  'posts_per_page'=>'3',
		  'post__not_in'=>array($post->ID),
      'tax_query' => array(
          array (
              'taxonomy' => 'category',
              'field'    => 'term_id',
			'terms'    => array( $term_id )
              
                )
        ),
        ) );?>
         <?php if($catquery->have_posts()):?>
        <section class="site_newsblock">

<div class="news_title">
	<h2><a href="<?php //echo get_term_link(5);?>"> छुटाउनुभयो कि?  </a></h2>
	
</div><div class="clearfix"></div>
<div class="row">
	

	 
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
	<div class="col-md-4">
	 <div class="col-news-a clearfix">

	 
				
			<div class="img_news clearfix">
			    		<?php if(has_post_thumbnail($catquery->post->ID)): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
                 $image_src = $image[0];
                 echo '<img src="'.$image_src.'" alt="'.get_the_title().'">'; ?>
                 <?php endif;?>
       
			</div>
			<div class="news_time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></div><div class="clearfix"></div>
			<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3><div class="clearfix"></div>
			<p><?php echo wp_trim_words(get_the_excerpt(),'20',null);?></p>

			<div class="rmore">
				<a href="<?php the_permalink();?>"> बाँकी खबर </a>
			</div><div class="clearfix"></div>

	 </div> 
	
	</div>
  <?php 
        endwhile;
    wp_reset_postdata(); ?>
	

</div><div class="clearfix"></div>
</section><div class="clearfix"></div><!--  news section end -->
<?php endif;?>															
				
																 
																  <?php get_template_part('template-parts/content', 'advert-below-important');?>


<div class="clearfix"></div>




											            </div><!-- single wrap page end -->
											          </div><!-- left listing content end -->

										  			<?php get_sidebar();?>
										        </div>
									    	<?php endwhile;?>
    </div>
    </section>
    <div class="clearfix"></div><!-- listing page content end -->
<?php get_footer();?>