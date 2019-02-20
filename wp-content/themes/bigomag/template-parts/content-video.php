<?php 
	/*
	 * The WordPress Query class.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
	 */
	$args = array(
	  'posts_per_page' =>'1',
		'post_type' => array(
			'gallery'
		),

		

		
	
		
		

		

		// Taxonomy Parameters
		'tax_query' => array(
			
			array(
				'taxonomy'         => 'gallery_type',
				'field'            => 'slug',
				'terms'            => array( 'video' )
				
			)
			
		),

		

	);

?>
	<?php 
$query = new WP_Query( $args );
if($query->have_posts()):
while($query->have_posts()):
	$query->the_post();
   $meta_data = get_post_meta($query->post->ID);
              $id =$query->post->ID;
   $videos = get_field('video', $query->post->ID);


endwhile;
else: 
echo " ";
endif;
wp_reset_query();?>
<section class="video_block">
	<div class="news_title gallery_top">
			<h2><a href="<?php echo get_permalink(  $id  );?>"> <span>भिडियो </span> ग्यालरी </a></h2>
			<div class="clearfix"></div>
		</div><div class="clearfix"></div>

		<div class="news_video">
			<div class="embed-responsive embed-responsive-4by3">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $videos[0]['embed'];?>?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
			</div>
		</div><div class="clearfix"></div>

		<div class="row">
		

	<?php 
   $i = 0;
   foreach($videos as $video):
   	$i++;
   if($i==5){
   	break;
   }
   	if($i==1){
     continue;
   	}
   	if($i==2){
        $class = 'gallery_thumb';
   	}
   	if($i==3){
     $class = 'gallery_thumb_b';
   	}
   	if($i==4){
        $class = 'gallery_thumb_a';
   	}?>
   	<div class="col-md-4">
				<div class="<?php echo $class;?> clearfix">

					<a href="">
				<div class="embed-responsive embed-responsive-4by3">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video['embed'];?>?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
				</div>
			</a><div class="clearfix"></div>
			<h3><a href=""> आहा १ रारा गोल्डकप माघ ९ बाट, १२ टिम सहभागी </a></h3> 
		</div>
		</div>
 <?php
    
   	endforeach;
 ?>


		</div><div class="clearfix"></div>
		</section><div class="clearfix"></div><!--  video section end -->
