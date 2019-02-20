	<section class="hotnews_slide">
		<section class="autoplay slider">
		
       <?php $args1 = array(
		 	'post_type' => 'post',
		 	'posts_per_page'=>'3',
		 	
	 		);
	 		$slider = new WP_Query($args1);?>

	 
			<?php while($slider->have_posts()) : $slider->the_post(); ?>
			<div class="slick-slide">
				<div class="slide_newsec">
					<?php echo wp_get_attachment_image(get_post_thumbnail_id($post->ID), 'full', false, array("class" => "img-responsive") );?>
					<img src="<?php echo $sl["image"]["url"];?>" class="img-responsive"/></div>

				<div class="slide_newsec_content clearfix">
					<a href="<?php echo get_permalink($post->ID);?>"> <?php the_title();?>  </a>
				</div>

			</div>
	<?php endwhile;
    wp_reset_postdata();?>
		</section>
	</section><div class="clearfix"></div><!-- hot news slide end -->
