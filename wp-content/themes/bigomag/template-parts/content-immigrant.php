

     <?php $args = array(
		 	'post_type' => 'post',
		 	'posts_per_page'=>'2',
		 	'tax_query' => array(
						 		array (
					              'taxonomy' => 'category',
					              'field' => 'slug',
					              'terms' => 'immigrant',
					                )
		 						)
	 		);
	 		$catquery = new WP_Query($args);?>

	 <?php if($catquery->have_posts()):?>

	 <section class="site_newsblock">
	<div class="clearfix"></div>
	<div class="news_title">
		<h2><a href="<?php  echo get_term_link(8);?>">प्रवास</a></h2>

	</div>


	<div class="row">
        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
        <?php $first_id = $post->ID; ?>
		<div class="col-md-6">
			<div class="news_block_a clearfix">
			    <?php if (has_post_thumbnail($post->ID)): ?>
				<a href="<?php echo get_permalink();?>">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
	                 $image_src = $image[0];
	                 echo '<img src="'.$image_src.'" alt="'.get_the_title().'">'; ?></a>
	                 <?php endif;?>
                <h3><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
                <div class="news_time"> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
				<p class="the-excerpt"><?php echo wp_trim_words(get_the_excerpt(),'10',null);?></p>
				<div class="clearfix"></div>
			</div>
		</div>
        <?php
        endwhile;
        wp_reset_postdata(); ?>
	</div><div class="clearfix"></div><!-- main block news highlight end -->


	<div class="row" style="padding: 15px">
		<?php $args = array(
		 	'post_type' => 'post',
		 	'posts_per_page'=>'4',
		 	'post__not_in' => array($first_id),
		 	'tax_query' => array(
						 		array (
					              'taxonomy' => 'category',
					              'field' => 'slug',
					              'terms' => 'immigrant',
					                )
		 						)
	 		);
	 		$catquery = new WP_Query($args);
	 		$i = 2;?>
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
			<div class="col-md-6">
				<div class="<?php echo ($i%2==0)?'column_block':'column_block_aa';?>  clearfix" >
				   <?php if (has_post_thumbnail($post->ID)): ?>
					<a href="<?php echo get_permalink();?>">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
                 $image_src = $image[0];
                 echo '<img src="'.$image_src.'" alt="'.get_the_title().'" class="img-repsonsive">'?>

                 </a>
                 <?php endif;?>
					<h3><a href="<?php echo get_permalink();?>"> <?php echo get_the_title();?></a></h3>
					<div class="news_time"> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
				</div>
			</div>
			<?php  endwhile;
    	wp_reset_postdata(); ?>

	</div><div class="clearfix"></div><!-- column news highlight end -->


</section><div class="clearfix"></div><!--  domestic and international news section end -->
<?php endif;?>