<div class="col-md-4 block_right">
	
	
	

	<aside class="site_livenews">

	
		<div class="clearfix"></div>

			<div class="livenews_a clearfix">
			    <div class="news_title">
												<h2><a href="javascript:void();">ताजा खबर</a></h2>
												
											</div><div class="clearfix"></div>
				<ul>
				<?php $args = array(
		 	'post_type' => 'post',
		 	'posts_per_page'=>'5',
		 
	 		);
	 		$catquery = new WP_Query($args);
			while($catquery->have_posts()) : $catquery->the_post(); ?>
					<li><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></li>
						<?php endwhile; ?>
				</ul><div class="clearfix"></div>
			</div><!-- livenews a end -->

	</aside><div class="clearfix"></div><!-- live news end -->

	<aside class="gads_view_a">
		<?php   
               $the_query = new WP_Query( array(
    'post_type' => 'advertisement',
    'tax_query' => array(
        array (
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => 'aside-sport',
        )
    ),
) );
                  while ( $the_query->have_posts() ) :
    $the_query->the_post();
          echo '<a href="<?php the_permalink();?>">';
          echo '<div class="img-responsive">';
                   $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
                 $image_src = $image[0];
                 echo '<img src="'.$image_src.'" alt="'.get_the_title().'">';
           echo '</div>';
          echo '</a>';
      endwhile;
      wp_reset_postdata();
      ?>
	</aside><div class="clearfix"></div><!-- ads a end -->



	 <aside class="site_livenews">
	
		<div class="clearfix"></div>

			<div class="livenews_a clearfix">
			    <div class="news_title">
												<h2><a href="javascript:void();">लोकप्रिय खबर</a></h2>
												
											</div><div class="clearfix"></div>
				<?php $args = array(
			 	'post_type' => 'post',
			 	'posts_per_page'=>'5',
			 
		 		'orderby'      => 'meta_value_num',  /* this will look at the meta_key you set below */
	  			'meta_key'     => 'views_count',
	  			'order'        => 'DESC',
		 		);
		 		$catquery = new WP_Query($args);
				while($catquery->have_posts()) : $catquery->the_post(); ?>
					<ul>
						<li><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></li>
					</ul>
				<?php endwhile;
	      		wp_reset_postdata();
	      		?>
				<div class="clearfix"></div>
			</div><!-- livenews a end -->

	</aside><div class="clearfix"></div><!-- most views end -->

	<aside class="gads_view_a">
		<?php   
               $the_query = new WP_Query( array(
    'post_type' => 'advertisement',
    'tax_query' => array(
        array (
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => 'below-popular-home',
        )
    ),
) );
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
      wp_reset_postdata();
      ?>
	</aside><div class="clearfix"></div><!-- ads a end -->
	<?php $args = array(
			 	'post_type' => 'post',
			 	'posts_per_page'=>'5',
			 
		 		 'tax_query' => array(
        array (
            'taxonomy' => 'location',
            'field' => 'slug',
            'terms' => 'paper',
        )
    )
		 		);
		 		$catquery = new WP_Query($args);
	if($catquery->have_posts()):?>
<div class="news_title">
												<h2><a href="javascript:void();">पत्रपत्रिका</a></h2>
												
											</div><div class="clearfix"></div
	<aside class="site_livenews">
	
		<div class="clearfix"></div>

			<div class="livenews_a clearfix">
				<?php
				while($catquery->have_posts()) : $catquery->the_post(); ?>
					<ul>
						<li><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></li>
					</ul>
				<?php endwhile;
	      		wp_reset_postdata();
	      		?>
				<div class="clearfix"></div>
			</div><!-- livenews a end -->

	</aside><div class="clearfix"></div><!-- most views end -->
	<?php endif;?>
	<?php get_template_part('template-parts/content','right-layout-one');?>
<?php echo get_template_part('template-parts/content','advertise-right-bottom'); ?>
</div><!-- right content end -->