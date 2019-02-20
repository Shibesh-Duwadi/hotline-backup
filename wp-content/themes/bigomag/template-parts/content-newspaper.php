<?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => '2',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'news-paper',
        )
    )
);
$catquery = new WP_Query($args); ?>

<?php if ($catquery->have_posts()): ?>
    <section class="site_newsblock" style="margin: 0px 0px 30px 0px">
        <div class="news_title">
            <h2><a href="<?php echo get_term_link(39); ?>">पत्रपत्रिका </a></h2>

        </div>



        <br>
        <div class="col-md-9" style="padding-left: 0;">
            <div class="clearfix"></div>
            <div class="row">
                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                    <?php $first_id = $post->ID; ?>
                <div class="col-md-6">
                    <div class="column_block clearfix"> <?php if (has_post_thumbnail($post->ID)): ?>
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="col-md-12 mainnews"><?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                                $image_src = $image[0];
                                echo '<img src="' . $image_src . '" alt="' . get_the_title() . '">'; ?></div>
                            </a><?php endif; ?>
                        <h3 class="mainnewstitle"><a href="<?php echo get_permalink(); ?>" ><?php the_title(); ?> </a></h3>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata(); ?>
            </div>
            <div class="clearfix"></div><!-- main block news highlight end -->

            <div class="row col-md-12">
                <?php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '4',
                    'post__not_in' => array($first_id),
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'news-paper',
                        )
                    )
                );
                $catquery = new WP_Query($args);
                $i = 2; ?>
                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                    <div class="col-md-3" style="padding: 0;">
                        <div class="<?php echo ($i % 2 == 0) ? 'column_block' : 'column_block_aa'; ?> clearfix">
                            <?php if (has_post_thumbnail($post->ID)): ?>
                            <a href="<?php echo get_permalink(); ?>">

                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                                $image_src = $image[0];
                                echo '<img src="' . $image_src . '" alt="' . get_the_title() . '" class="img-repsonsive">' ?></a><?php endif; ?>
	                            <h3><a href="<?php echo get_permalink(); ?>" ><?php the_title(); ?> </a></h3>
                        </div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="clearfix"></div><!-- column news highlight end -->
        </div>

        <div class="col-md-3" style="border-left: 2px solid #f2f2f2;">
            <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => '6',
                'offset' => '5',
                'post__not_in' => array($first_id),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'news-paper',
                    )
                )
            );
            $catquery = new WP_Query($args);
            $i = 6; ?>
            <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="col-md-12">
                    <div class="<?php echo ($i % 6 == 0) ? 'column_block' : 'column_block_aa'; ?> clearfix" style="margin: 0 2px 25px 0px;">
                        <h3><a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a></h3>
                    </div>
                </div>

            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>


    </section>
    <div class="clearfix"></div><!--  sports section end -->
<?php endif; ?>

