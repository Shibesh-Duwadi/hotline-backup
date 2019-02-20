<div class="block_right  col-md-12" style="margin: 0px 0px 30px 0px">

    <div class="tab" style="display: flex;" >
      <button class="tablinks tab-news-title col-md-6" onclick="openCity(event, 'taja')" id="defaultOpen"><h2><a>ताजा खबर</a></h2></button>
      <button class="tablinks tab-news-title col-md-6" onclick="openCity(event, 'lokpriya')"><h2><a>लोकप्रिय खबर</a></h2></button>
    </div>

    <div id="taja" class="tabcontent">
      <div class="clearfix"></div>
                <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'advertisement',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'location',
                            'field' => 'slug',
                            'terms' => 'aside-sport',
                        )
                    ),
                ));
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    echo '<a href="<?php the_permalink();?>">';
                    echo '<div class="img-responsive">';
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                    $image_src = $image[0];
                    echo '<img src="' . $image_src . '" alt="' . get_the_title() . '">';
                    echo '</div>';
                    echo '</a>';
                endwhile;
                wp_reset_postdata();
                ?>
            <div class="livenews_a clearfix">
                <div class="clearfix"></div>
                    <ul>
                        <?php $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '6',

                        );
                        $catquery = new WP_Query($args);
                        while ($catquery->have_posts()) : $catquery->the_post(); ?>
                            <li class="recent-news">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                                    $image_src = $image[0];
                                    echo '<img src="' . $image_src . '" alt="' . get_the_title() . '">'; ?>
                                </a>
                                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                <div class="clearfix"></div>
            </div><!-- livenews a end -->
        <div class="clearfix"></div><!-- live news end -->
    </div>

    <div id="lokpriya" class="tabcontent">
      <div class="clearfix"></div><!-- ads a end -->


        <aside class="site_livenews">

            <div class="clearfix"></div>

            <div class="livenews_a clearfix">
                <div class="clearfix"></div>
                <?php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '6',

                    'orderby' => 'meta_value_num',  /* this will look at the meta_key you set below */
                    'meta_key' => 'views_count',
                    'order' => 'DESC',
                );
                $catquery = new WP_Query($args);
                while ($catquery->have_posts()) :
                $catquery->the_post(); ?>
                    <ul>
                        <li class="popular-news">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                                $image_src = $image[0];
                                echo '<img src="' . $image_src . '" alt="' . get_the_title() . '">'; ?>
                            </a>
                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
                    </ul>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
            </div>
                <div class="clearfix"></div> 
            </aside>
    </div>
    

    <?php echo get_template_part('template-parts/content', 'advertise-right-bottom'); ?>
</div><!-- right content end -->


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>