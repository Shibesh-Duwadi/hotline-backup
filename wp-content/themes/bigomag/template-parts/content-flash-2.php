<?php
/**
 *
 * Template to show the flash posts in home page
 * Latest 3 posts
 */

?>
<div class="site_flashnews">
<?php $args = array(
                'post_type' => 'post',
                'posts_per_page'=>'1',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'hot-khabar',
                    )
                )
            );
            $catquery = new WP_Query($args);?>

		
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                    <div class="hot1">
	                <div class="clearfix"></div>
	                <?php if(!empty(get_field('add_custom_title'))) : ?>
	                    <p class="secondary-title"><?php echo the_field('add_custom_title'); ?></p>
	                    
	                <?php endif; ?>
	                <?php echo sprintf('<h2><a href="%s">%s</a></h2>', get_the_permalink($post->ID), get_the_title()); ?>
	                <div class="article-info" style="display: flex; justify-content: center;">
    	                <?php 
    	                
        	                if(get_field('reporter_name') === "हटलाइनखबर") : ?>
        	                
        	                <img src="/wp-content/themes/bigomag/assets/images/favicon-32x32.png" style="width: 25px; height: 25px; margin-right: 6px;">
        	                <p class="the-reporter" style="font-size: 15px; color: #333333ab;"><?php echo the_field('reporter_name'); ?></p>  
        	                
        	                <?php elseif( !empty(get_field('reporter_name'))) : ?>
        	                    <p class="the-reporter" style="font-size: 15px; color: #333333ab;"><?php echo the_field('reporter_name'); ?></p>
        	                    
        	                <?php endif; ?>
        	                
    
	                
	                    <div class="news_time_hot" style="margin-left: 10px; color: #333333ab;"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
	                </div>
	                
            		    <div class="clearfix"></div>
                        <a href="<?php the_permalink();?>" style="color: white">
                             <div class="site_slide_news clearfix">
                                <?php if(get_field('homepage_featured_image') == "Yes"): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
                                    $image_src = $image[0];
                                    echo '<img src="'.$image_src.'" alt="'.get_the_title().'">'; ?>
                                <?php endif; ?>
                            </div>
                            <div class="clearfix"></div>
                            <p class="the-excerpt"><?php echo wp_trim_words(get_the_excerpt($post->ID),'100',null);?></p>
                    </div>
            <?php
            endwhile;
            wp_reset_postdata(); ?>
            
            
            
            
<?php $args = array(
                'post_type' => 'post',
                'posts_per_page'=>'1',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'hot-khabar-two',
                    )
                )
            );
            $catquery = new WP_Query($args);?>

		
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="hot2">
	                <div class="clearfix"></div>
	                <?php if(!empty(get_field('add_custom_title'))) : ?>
	                    <p class="secondary-title"><?php echo the_field('add_custom_title'); ?></p>
	                    
	                <?php endif; ?>
	                <?php echo sprintf('<h2><a href="%s">%s</a></h2>', get_the_permalink($post->ID), get_the_title()); ?>
	                <div class="article-info" style="display: flex; justify-content: center;">
    	                <?php 
    	                
        	                if(get_field('reporter_name') === "हटलाइनखबर") : ?>
        	                
        	                <img src="/wp-content/themes/bigomag/assets/images/favicon-32x32.png" style="width: 25px; height: 25px; margin-right: 6px;">
        	                <p class="the-reporter" style="font-size: 15px; color: #333333ab;"><?php echo the_field('reporter_name'); ?></p>  
        	                
        	                <?php elseif( !empty(get_field('reporter_name'))) : ?>
        	                    <p class="the-reporter" style="font-size: 15px; color: #333333ab;"><?php echo the_field('reporter_name'); ?></p>
        	                    
        	                <?php endif; ?>
        	                
    
	                
	                    <div class="news_time_hot" style="margin-left: 10px; color: #333333ab;"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
	                </div>
            		    <div class="clearfix"></div>
                        <a href="<?php the_permalink();?>" style="color: white">
                             <div class="site_slide_news clearfix">
                                <?php if(get_field('homepage_featured_image') == "Yes"): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
                                    $image_src = $image[0];
                                    echo '<img src="'.$image_src.'" alt="'.get_the_title().'">'; ?>
                                <?php endif; ?>

                            </div>
                            <div class="clearfix"></div>
                            <p class="the-excerpt"><?php echo wp_trim_words(get_the_excerpt($post->ID),'100',null);?></p>

                    </div>
            <?php
            endwhile;
            wp_reset_postdata(); ?>
            
            
            
<?php $args = array(
                'post_type' => 'post',
                'posts_per_page'=>'1',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'hot-khabar-three',
                    )
                )
            );
            $catquery = new WP_Query($args);?>

		
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="hot3">
	                <div class="clearfix"></div>
	                <?php if(!empty(get_field('add_custom_title'))) : ?>
	                    <p class="secondary-title"><?php echo the_field('add_custom_title'); ?></p>
	                    
	                <?php endif; ?>
	                <?php echo sprintf('<h2><a href="%s">%s</a></h2>', get_the_permalink($post->ID), get_the_title()); ?>
	                <div class="article-info" style="display: flex; justify-content: center;">
    	                <?php 
    	                
        	                if(get_field('reporter_name') === "हटलाइनखबर") : ?>
        	                
        	                <img src="/wp-content/themes/bigomag/assets/images/favicon-32x32.png" style="width: 25px; height: 25px; margin-right: 6px;">
        	                <p class="the-reporter" style="font-size: 15px; color: #333333ab;"><?php echo the_field('reporter_name'); ?></p>  
        	                
        	                <?php elseif( !empty(get_field('reporter_name'))) : ?>
        	                    <p class="the-reporter" style="font-size: 15px; color: #333333ab;"><?php echo the_field('reporter_name'); ?></p>
        	                    
        	                <?php endif; ?>
        	                
    
	                
	                    <div class="news_time_hot" style="margin-left: 10px; color: #333333ab;"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
	                </div>
            		    <div class="clearfix"></div>
                        <a href="<?php the_permalink();?>" style="color: white">
                             <div class="site_slide_news clearfix">
                                <?php if(get_field('homepage_featured_image') == "Yes"): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
                                    $image_src = $image[0];
                                    echo '<img src="'.$image_src.'" alt="'.get_the_title().'">'; ?>
                                <?php endif; ?>

                            </div>
                            <div class="clearfix"></div>
                            <p class="the-excerpt"><?php echo wp_trim_words(get_the_excerpt($post->ID),'100',null);?></p>

                    </div>
            <?php
            endwhile;
            wp_reset_postdata(); ?>
            
</div>