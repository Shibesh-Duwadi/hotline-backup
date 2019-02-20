<?php
/**
 *
 * Template to show the flash posts in home page
 * Latest 3 posts
 */
$lastposts = get_posts(array(
    'posts_per_page' => 3,
));

?>
<?php if ($lastposts): ?>
	<div class="site_flashnews">
								<h1>Hot news</h1><div class="clearfix"></div>
								 

								<div class="site_slide_news">
								 <div class="autoplay slider">
								 	<?php foreach ($lastposts as $key => $flash_post): ?>

								 		
										<div class="slick-slider">
											<?php echo sprintf('<h2 class="clearfix""><a href="%s">%s</a></h2>', get_the_permalink($flash_post->ID), $flash_post->post_title); ?>
								<?php if (has_post_thumbnail($flash_post->ID)): ?>
								<a href="<?php echo esc_url(get_the_permalink($flash_post->ID)); ?>">

								<div class="flash_news" style="background-image: url(<?php echo get_the_post_thumbnail_url($flash_post->ID, 'full') ?>);" class="img-responsive">
								</div>

								</a>
								<?php endif;?>
										
										</div>

									

									
                                <?php endforeach;?>
									</div>
								</div><div class="clearfix"></div>
						</div><div class="clearfix"></div><!-- flash news end -->
<?php endif;?>