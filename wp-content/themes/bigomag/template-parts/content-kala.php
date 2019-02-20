<section class="site_newsblock">

    <div class="news_title">
        <h2><a href="<?php echo get_term_link(43);?>"> कला  </a></h2>

    </div><div class="clearfix"></div>

        <div class="row" style="padding: 15px; background-color: #484a4c;">
            <?php $args = array(
                'post_type' => 'post',
                'posts_per_page'=>'4',
                'offset' => '1',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'art-literature',
                    )
                )
            );
            $catquery = new WP_Query($args);?>


            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="col-md-3">
                    <div class="col-news-a clearfix" style="min-height: 250px">


                        <a href="<?php the_permalink();?>" style="color: white">
                            <div class="img_news clearfix">
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full',false);
                                $image_src = $image[0];
                                echo '<img src="'.$image_src.'" alt="'.get_the_title().'">'; ?>

                            </div>
                            <div class="clearfix"></div>
                            <h3 style="height: 40px"><?php the_title(); ?></a></h3><div class="clearfix"></div>

                    </div>

                </div>
            <?php
            endwhile;
            wp_reset_postdata(); ?>


        </div><div class="clearfix"></div>
</section>
<div class="clearfix"></div><!--  news section end -->