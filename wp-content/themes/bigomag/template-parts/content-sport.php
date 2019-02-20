<section class="site_newsblock" style="margin: 30px 0px 30px 0px; min-height: 700px">
    <div class="news_title">
        <h2><a href="<?php echo get_term_link(5);?>"> खेलकुद खबर </a></h2>

    </div>
    <div class="clearfix"></div>

    <div class="row">
        <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => '6',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'sports',
                )
            )
        );
        $catquery = new WP_Query($args); ?>


        <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
            <div class="col-md-4">
                <div class="col-news-a clearfix">

                    <a href="<?php the_permalink(); ?>">
                    <div class="img_news clearfix">
                        <?php if (has_post_thumbnail($post->ID)): ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                            $image_src = $image[0];
                            echo '<img src="' . $image_src . '" alt="' . get_the_title() . '">'; ?>
                        <?php endif; ?>

                    </div></a>
                    <div class="news_time"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
                    <div class="clearfix"></div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<!--                    <div class="clearfix"></div>-->
<!--                    <p>-->
<!--                        --><?php //echo wp_trim_words(get_the_excerpt(),'20',null);?><!--</p>-->
<!--                        <div class="rmore">-->
<!--                        <a href="--><?php //the_permalink(); ?><!--<!--"> बाँकी खबर  </a>-->
<!--                        </div>-->
                    <div class="clearfix"></div>

                </div>

            </div>
        <?php
        endwhile;
        wp_reset_postdata(); ?>
<!--        <div class="col-md-4">-->
<!--            <div class="col-news-b clearfix">-->
<!--                --><?php //$args = array(
//
//                    'posts_per_page' => '5',
//                    'offset' => '2',
//
//
//                    'tax_query' => array(
//                        array(
//                            'taxonomy' => 'category',
//                            'field' => 'slug',
//                            'terms' => 'sports',
//                        )
//                    )
//
//                );
//
//                $catquery = new WP_Query($args); ?>
<!--                --><?php //while ($catquery->have_posts()) : $catquery->the_post(); ?>
<!--                    <div class="news_block news_block_title_only">-->
<!---->
<!--                        <h3><a href="--><?php //the_permalink(); ?><!--">--><?php //echo get_the_title(); ?><!--</a></h3>-->
<!--                    </div>-->
<!--                --><?php //endwhile; ?>
<!--                <div class="clearfix"></div>news block a end -->
<!---->
<!--                --><?php
//                wp_reset_postdata(); ?>
<!--            </div>-->
<!--        </div>-->

    </div>
    <div class="clearfix"></div>
</section>
<div class="clearfix"></div><!--  news section end -->