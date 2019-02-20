<?php get_header();?>
<!-- <style>
@media only screen and (max-width: 768px){
	.column_block h3 a, .column_block_aa h3 a {
		font-size: 15px;
	}
	.site_flashnews h2 {
		font-size: 25px;
	}
}
	</style> -->
	<section class="site_content">
		<div class="container">

			<?php get_template_part('template-parts/content', 'advert');   ?>

			<?php //get_template_part('template-parts/content', 'flash');?>
				
			<?php get_template_part('template-parts/content', 'flash-2');?>


			<?php //get_template_part('template-parts/content', 'advert-below-slider');?>


			<div class="news_content">
			   
			         <?php get_template_part('template-parts/content', 'block-three-columns');?>
			          
			     
				<div class="row">
				    
				    <div class="col-md-12">
				       
				        </div>
				        
				        <div class="col-md-10 block_left">
                        <?php get_template_part('template-parts/content', 'main-news'); ?>
                        </div>
                        
                        <div class="col-md-8 block_left">
                        <?php //get_template_part('template-parts/content', 'slider');?>
                        <?php get_template_part('template-parts/content', 'politics'); ?>
                        </div>
                        <div class="col-md-4 block_left">
                            <?php get_template_part('template-parts/content', 'rightblock'); ?>
    
                        </div>
                        <div class="clearfix"></div><!-- news content end -->
                    <div class="col-md-10 block_left">
                        <?php get_template_part('template-parts/content', 'artha-urja'); ?>
                    </div>
                    
                    <div class="col-md-10 block_left">
                        <?php get_template_part('template-parts/content', 'antarbarta'); ?>
                    </div>
                    
                    <div class="col-md-9 block_left">
                       <?php get_template_part('template-parts/content', 'news'); ?>
                   </div>
                   <div class="col-md-3">
                       <?php get_template_part('template-parts/content','right-layout-one'); ?>
                   </div>
				
						<?php get_template_part('template-parts/content', 'views');?>
						
						<div class="col-md-10 block_left">
                        <?php get_template_part('template-parts/content', 'siksha-swastha'); ?>
                        </div>
						
                        <div class="col-md-10 block_left">
						<?php get_template_part('template-parts/content', 'sport');?> 
						</div>
						
						<div class="col-md-10 block_left">
						<?php get_template_part('template-parts/content', 'kala');?> 
						</div>
						
						<div class="col-md-10 block_left">
						<?php get_template_part('template-parts/content', 'abroad');?>
						</div>
						
						<div class="col-md-10 block_left">
                        <?php get_template_part('template-parts/content', 'bigyan-rochak'); ?>
                        </div>
                        
                        <div class="col-md-10 block_left">
                        <?php get_template_part('template-parts/content', 'immigrant'); ?>
                        </div>
                        
                        <div class="col-md-10 block_left">
						<?php get_template_part('template-parts/content', 'lifestyle');?>
						</div>
						
						<div class="col-md-10 block_left">
						<?php get_template_part('template-parts/content', 'newspaper');?>
						</div>
                        
						<?php //get_template_part('template-parts/content', 'health');?>
                        
					</div><!-- left content end -->

						
                </div>

				</div>

			</div><div class="clearfix"></div><!-- news content end -->

		</div>
	</section><div class="clearfix"></div><!-- main content end -->

    
<?php get_footer();?>