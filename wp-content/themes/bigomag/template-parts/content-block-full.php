<section class="site_newsblock" style="margin: 30px 0px 60px 0px;">
<div class="news_title">
												<h2><a href="<?php echo get_term_link(44);?>">  
												 प्रदेश
												</a></h2>
												<div class="tab-more">
		<!--<ul class="news-sub-category-tab-list">
		   <li><a href="#">देश </a></li><li><a href="#">प्रदेश १ </a></li><li><a href="#">प्रदेश २ </a></li><li><a href="#">प्रदेश ३ </a></li><li><a href="#">प्रदेश ४ </a></li><li><a href="#">प्रदेश ५ </a></li><li><a href="#">प्रदेश ६ </a></li><li><a href="#">प्रदेश  ७  </a></li><li><a href="#">सबै </a></li>
		</ul>-->
	</div>
											</div><div class="clearfix"></div>
<div class="row">
	<div class="col-md-5">
	 <div class="col-news-a clearfix">

	 <?php $args = array(
		 	'post_type' => 'post',
		 	'posts_per_page'=>'1',
	        
		 	'tax_query' => array(
						 		array (
					              'taxonomy' => 'category',
					              'field' => 'slug',
					              'terms' => 'state',
					                )
		 						)
	 		);
	 		$catquery = new WP_Query($args);?>

	 
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<?php $first_id = $post->ID; ?>
			<div class="img_news clearfix">
				<?php if(has_post_thumbnail($catquery->post->ID)):?><a href="<?php the_permalink();?>">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
                 $image_src = $image[0];
				echo '<img src="'.$image_src.'" alt="'.get_the_title().'">'; ?></a>
				<?php endif;?>
       
			</div>
			<div class="news_time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></div><div class="clearfix"></div>
			<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3><div class="clearfix"></div>
<p>
<?php echo wp_trim_words(get_the_excerpt(),'20',null);?></p>
			<div class="rmore">
				<a href="<?php the_permalink();?>"> बाँकी खबर </a>
			</div><div class="clearfix"></div>

	 </div> 
	  <?php 
        endwhile;
    wp_reset_postdata(); ?>
	</div>

	<div class="col-md-3">
		<div class="col-news-b clearfix">
	<?php  $args = array (

        'posts_per_page' => '3',

        'orderby' => 'date',
	'offset' => '1',
        'tax_query' => array(
            array (
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'state',
            )
        )

    );

	 		$catquery = new WP_Query($args);?>
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<div class="news_block">
					<?php if(has_post_thumbnail($catquery->post->ID)):?>
					<a href="<?php the_permalink();?>"><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($catquery ->post->ID), 'full',false);
                 $image_src = $image[0];
                 echo '<img src="'.$image_src.'" alt="'.get_the_title().'">'; ?></a>
					<?php endif;?>
					<h3><a href="<?php the_permalink();?>"><?php  echo get_the_title(); ?></a></h3>
				</div>
			<?php  endwhile; ?>
				<div class="clearfix"></div><!-- news block a end -->

				 <?php 
    wp_reset_postdata(); ?>
		</div>
	</div>
	<div class="col-md-4">
	 <div class="col-news-a clearfix">

	 <?php $args = array(
		 	'post_type' => 'post',
		 	'posts_per_page'=>'1',
	'offset' => '4',
		 	'tax_query' => array(
						 		array (
					              'taxonomy' => 'category',
					              'field' => 'slug',
					              'terms' => 'state',
					                )
		 						)
	 		);
	 		$catquery = new WP_Query($args);?>

	 
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<?php $first_id = $post->ID; ?>
			<div class="img_news clearfix">
				<?php if(has_post_thumbnail($catquery->post->ID)):?><a href="<?php the_permalink();?>">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
                 $image_src = $image[0];
                 echo '<img src="'.$image_src.'" alt="'.get_the_title().'">'; ?>
				</a>
				<?php endif;?>
       
			</div>
			<div class="news_time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></div><div class="clearfix"></div>
			<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3><div class="clearfix"></div>
<p>
<?php echo wp_trim_words(get_the_excerpt(),'20',null);?></p>
			<div class="rmore">
				<a href="<?php the_permalink();?>"> बाँकी खबर </a>
			</div><div class="clearfix"></div>

	 </div> 
	  <?php 
        endwhile;
    wp_reset_postdata(); ?>
	</div>
</div><div class="clearfix"></div>
</section><div class="clearfix"></div><!--  news section end -->