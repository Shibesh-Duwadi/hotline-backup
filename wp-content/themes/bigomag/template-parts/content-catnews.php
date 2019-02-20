<div class="news_tabs">
  <div id="horizontalTab">
    <ul>
      <li>
		  <a href="#tab-1">लोकप्रिय</a></li>
      <li><a href="#tab-2">ताजा खबर </a></li>
    </ul>
    <div id="tab-1">
     <aside class="trend_a">
     <?php $args = array(
     'post_type' => 'post',
     'posts_per_page'=>'5',
     'orderby'      => 'meta_value_num',  /* this will look at the meta_key you set below */
  			'meta_key'     => 'views_count',
  			'order'        => 'DESC',
     );
     $catquery = new WP_Query($args);
     ?>
      <ul><?php
    while($catquery->have_posts()) : $catquery->the_post(); ?>
      
        <li><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></li>
       
       <?php endwhile;
    wp_reset_postdata();
    ?></ul>
     </aside><div class="clearfix"></div><!-- trending a end -->
    </div>
    <div id="tab-2">
     <aside class="trend_a">
     <?php $args = array(
     'post_type' => 'post',
     'posts_per_page'=>'5',
     );
     $catquery = new WP_Query($args);
    while($catquery->have_posts()) : $catquery->the_post(); ?>
       <ul>
        <li><a href="<?php the_permalink();?>"> <?php the_title();?></a></li>
       </ul>
       <?php endwhile;
    wp_reset_postdata();
    ?>
     </aside><div class="clearfix"></div><!-- trending a end -->
    </div>
  </div>
  </div>
  <div class="clearfix">
</div><!-- tab news section end -->