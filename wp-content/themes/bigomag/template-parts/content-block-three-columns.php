<section class="site_newsblock site_newsblock_omit">

<div class="row">
		
	<?php  $args = array (

        'posts_per_page' => '3',
	    'offset' =>'3',


       

    );

	 		$catquery = new WP_Query($args);?>
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
			<div class="col-md-4">
		<div class="col-news-b clearfix">
				<div class="news_block">
					    <?php if (has_post_thumbnail($catquery ->post->ID)): ?>
					<a href=""><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($catquery ->post->ID), 'full',false);
                 $image_src = $image[0];
                 echo '<img src="'.$image_src.'" alt="'.get_the_title().'">'; ?></a>
					<?php endif;?>
					<h3><a href="<?php the_permalink();?>"><?php  echo get_the_title(); ?></a></h3>
				</div>	</div>
	</div>
			<?php  endwhile; ?>
				<div class="clearfix"></div><!-- news block a end -->

				 <?php 
    wp_reset_postdata(); ?>
	



</div><div class="clearfix"></div>
</section><div class="clearfix"></div><!--  news section end -->