<section class="site_newsblock" style="margin: 30px 0px 30px 0px;">
    <div class="news_title">
        <h2><a href="<?php //echo get_term_link(5);?>"> अन्तर्वार्ता </a></h2>

    </div>
    <div class="clearfix"></div>

    <div class="row">
        <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => '8',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'antarbarta',
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
                    <div class="clearfix"></div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="news_time"> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
                    <p class="the-excerpt"><?php echo wp_trim_words(get_the_excerpt(),'10',null);?></p>
                    <div class="clearfix"></div>

                </div>

            </div>
        <?php
        endwhile;
        wp_reset_postdata(); ?>

    </div>
    <div class="clearfix"></div>
</section>
<div class="clearfix"></div><!--  news section end -->