<?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => '1',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'economy',
        )
    )
);
$catquery = new WP_Query($args); ?>
<div class="row">
    <?php if ($catquery->have_posts()): ?>
        <div class="col-md-6 block_left">

            <section>

                <div class="news_title">
                    <h2><a href="<?php echo get_term_link(40); ?>"> अर्थ </a></h2>

                </div>
                <div class="clearfix"></div>


                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                    <?php $first_id = $post->ID; ?>
                    <div class="row" style="padding-bottom: 12px;">
                        <div class="col-md-12">
                            <div class="news_block_a clearfix">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                                    $image_src = $image[0];
                                    echo '<img src="' . $image_src . '" alt="' . get_the_title() . '">'; ?>
                                </a>
                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a>
                                </h3>
                                <div class="news_time"> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
                                <p class="the-excerpt"><?php echo wp_trim_words(get_the_excerpt(), '20', null); ?></p>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div><!-- main block news highlight end -->
                <?php
                endwhile;
                wp_reset_postdata(); ?>

                <div class="clearfix"></div><!-- column news highlight end -->
            </section>
            <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => '3',
            'offset' => '1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'economy',
                    )
                )
            );
            $catquery = new WP_Query($args); ?>
            <section class="arthasection">
                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                    <?php $first_id = $post->ID; ?>
                    <div class="row" style="padding-bottom: 12px;">
                        <div class="col-md-12">
                            <div class="news_block_a clearfix">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                                    $image_src = $image[0];
                                    echo '<img src="' . $image_src . '" alt="' . get_the_title() . '">'; ?>
                                </a>
                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a>
                                </h3>
                                <div class="news_time"> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
                                <p class="the-excerpt"><?php echo wp_trim_words(get_the_excerpt(), '10', null); ?></p>
                             <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div><!-- main block news highlight end -->
                <?php
                endwhile;
                wp_reset_postdata(); ?>

                <div class="clearfix"></div><!-- column news highlight end -->
            </section>
        </div>
        <div class="clearfix"></div><!--  sports section end -->
    <?php endif; ?>


    <?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => '1',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'urja',
            )
        )
    );
    $catquery = new WP_Query($args); ?>

    <?php if ($catquery->have_posts()): ?>
        <div class="col-md-6 block_left">

            <section>

                <div class="news_title">
                    <h2><a href="<?php echo get_term_link(300); ?>"> उर्जा </a></h2>

                </div>
                <div class="clearfix"></div>


                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                    <?php $first_id = $post->ID; ?>
                    <div class="row" style="padding-bottom: 12px;">
                        <div class="col-md-12">
                            <div class="news_block_a clearfix">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                                    $image_src = $image[0];
                                    echo '<img src="' . $image_src . '" alt="' . get_the_title() . '">'; ?>
                                </a>
                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a>
                                </h3>
                                <div class="news_time"> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
                                <p class="the-excerpt"><?php echo wp_trim_words(get_the_excerpt(), '20', null); ?></p>
                                <!--                                                <div class="rmore">-->
                                <!--                                                    <a href="-->
                                <?php //echo get_permalink(); ?><!--"> बाँकी खबर </a>-->
                                <!--                                                </div>-->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div><!-- main block news highlight end -->
                <?php
                endwhile;
                wp_reset_postdata(); ?>

                <div class="clearfix"></div><!-- column news highlight end -->
            </section>

            <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => '3',
            'offset' => '1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'urja',
                    )
                )
            );
            $catquery = new WP_Query($args); ?>
            <section class="arthasection">
                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                    <?php $first_id = $post->ID; ?>
                    <div class="row" style="padding-bottom: 12px;">
                        <div class="col-md-12">
                            <div class="news_block_a clearfix">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                                    $image_src = $image[0];
                                    echo '<img src="' . $image_src . '" alt="' . get_the_title() . '">'; ?>
                                </a>
                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a>
                                </h3>
                                <div class="news_time"> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></div>
                                <p class="the-excerpt"><?php echo wp_trim_words(get_the_excerpt(), '10', null); ?></p>
                             <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div><!-- main block news highlight end -->
                <?php
                endwhile;
                wp_reset_postdata(); ?>

                <div class="clearfix"></div><!-- column news highlight end -->
            </section>
        </div>
        <div class="clearfix"></div><!--  sports section end -->
    <?php endif; ?>
</div>
