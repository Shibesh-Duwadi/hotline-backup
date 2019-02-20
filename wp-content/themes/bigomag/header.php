<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta name="msvalidate.01" content="FC3D72FFEE8C06683998D097817FF22A" />
	<meta name="google-site-verification" content="9pT0a-pIAlZ057PD3LZ4A8LR0G5vZcyXipsDkwonCNw" />
	<meta name="yandex-verification" content="453b55eb96ccb4bd" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Hotline Khabar | News Website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php global $post;
    $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

    ?>
    <?php $x = get_post_meta($post->ID); ?>
    <link rel="image_src" href="<?php echo $image; ?>"/>
    <meta name="description" content="<?php echo get_the_excerpt($post->ID); ?>">
    <meta property="og:title" content="<?php echo get_the_title($post->ID); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo get_the_permalink($post->ID); ?>"/>
    <meta property="og:image" content="<?php echo $image ?>"/>
    <meta property="og:site_name" content="Nagarik Bichar"/>
    <meta property="fb:admins" content="hansu.shrestha.9"/>
    <meta property="fb:app_id" content="578175815897713"/>
    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>"/>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@psprakash045">
    <meta name="twitter:title" content="<?php echo get_the_title(); ?>">
    <meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>">
    <meta name="twitter:image" content="<?php echo $image; ?>">
    <?php

    global $wp_query;
    if (is_singular('post')):


        $mydata = (int)get_post_meta($wp_query->post->ID, 'views_count', true) + 1;

        update_post_meta($wp_query->post->ID, 'views_count', $mydata);
    endif; ?>


    <?php wp_reset_query(); ?>


    <!-- Custom JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script>
        window.Modernizr || document.write('<script src="<?php echo get_template_directory_uri();?>/assets/js/vendor/modernizr-2.8.3.min.js"><\/script>')
    </script>

    <?php wp_head(); ?>
    <script type="text/javascript"
            src="//platform-api.sharethis.com/js/sharethis.js#property=5be1ba17c7a9470012145ff9&product=inline-share-buttons"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108513102-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-108513102-5');
    </script>


</head>
<body>
    
 <!--   <div id="overlay">-->
 <!--       <div class="background-wht"></div>-->
 <!--       <button id="close-ad">Close this Ad</button>-->
	<!--	     <img src="./wp-content/themes/bigomag/assets/images/Janatako-Jalabiddhut-Programme-.jpg" alt="janatako Jalabiddhut Program" class="ad-img"/>-->
	<!--</div>-->
	
	
<section id="main_wrap">

    <section class="top_sec">
        <div class="container" style="border-bottom: 1px solid #008081; padding-bottom: 10px;">
            <div class="row">
                <div class="col-md-12" style="margin: 0; display: flex; justify-content: space-between;">
                    <aside class="top_info clearfix" style="text-align: left; ;">
                        <?php
                        $cal = new Nepali_Calendar();
                        $nepali_date = $cal->eng_to_nep(date('Y'), date('m'), date('d'));

                        $number = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
                        $nepali = array('०', '१', '२', '३', '४', '५', '६', '७', '८', '९');
                        $day = str_replace($number, $nepali, $nepali_date['date']);
                        $year = str_replace($number, $nepali, $nepali_date['year']);
                        $display = $nepali_date['day'] . ', ' . $day . ' ' . $nepali_date['month_name'] . '  ' . $year;
                        $display_english = date('D') . ', ' . date('jS') . ' ' . date('M') . '  ' . date('Y'); ?>
                        <ul>
                            <li><a href="javascript:void();"> <?php echo $display; ?></a></li>
                            <li class="eng-date"><a href="javascript:void();"> <?php echo $display_english; ?></a></li>

                        </ul>
                        <div class="clearfix"></div>
                    </aside>
                    <div class="top_social clearfix" style="float: right" >
                        <ul>
                            <li class="follow"> Follow us on :</li>
                            <li><a href="https://www.facebook.com/hotlinekhabarpost/" target="_blank"> <i
                                            class="fa fa-facebook" aria-hidden="true"></i> </a></li>
                            <li><a href="https://twitter.com/hotline_khabar/" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="#"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
					
                </div>
            </div>
        </div>
    </section>
    <section class="site_banner clearfix">
        <div class="container" style="min-height: 110px;">
            <div class="row" style="display: inline-block;">
                
                <div class="col-md-12 ad-bar-mobile" style="display:none;">
                    <div class="top-ad clearfix">
                        <img src="/wp-content/themes/bigomag/assets/images/header-ad.gif" alt="trademark education" style="width: 100%; object-fit: cover;" />
                    </div>
                </div><!-- logo end -->
                
                
                <div class="logo" style="width: fit-content; float: left;">
                    <div class="logo clearfix">
                        <?php //the_custom_logo(); ?>
                        <a href="<?php echo site_url(); ?>" class="custom-logo-link" rel="home" itemprop="url">
                            <span>HotlineKhabar</span></a>
                        <aside class="top_info clearfix">

                            <ul>
                                <li class="logo-heading" style="margin-left: 150px"><a href="javascript:void();">रफ्तारकाे
                                        खबर</a></li>


                            </ul>
                            <div class="clearfix"></div>
                        </aside>
                    </div>
                </div><!-- logo end -->
                
                <div class="ad-bar" style="max-width: 75%; float: right;">
                    <div class="top-ad clearfix">
                        <img src="/wp-content/themes/bigomag/assets/images/header-ad.gif" alt="trademark education" style="width: 100%; object-fit: cover;" />
                    </div>
                </div><!-- logo end -->


            </div>
        </div>
    </section>
    <div class="clearfix"></div><!-- main advertise end -->

    <section class="site_navigation" id="site_navigation">
        <div class="container">
            <div class="row">


                <?php if (wp_is_mobile()): ?>
                <div class="menu-mobile">
                    <div data-toggle="collapse" data-target="#navbarSupportedContent"
                         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                         class="navbar-toggler menu ">
                        <span class="navbar-toggler-icon" style="display: none;"></span>


                        <?php else : ?>
                        <div class="menu-container">
                            <div class="menu">
                                <?php endif; ?>
                                <?php

                                wp_nav_menu(array(
                                    'theme_location' => 'menu-1',
                                    'menu' => '',
                                    'container' => '',
                                    'container_class' => '',
                                    'container_id' => '',
                                    'menu_class' => '',
                                    'menu_id' => 'navbarSupportedContent',
                                    'echo' => true,

                                    'walker' => '',
                                ));
                                ?>
								
								<i class="fa fa-search"  aria-hidden="false"></i>
                            </div>
                        </div>
                    </div>
                </div>

    </section>
	<div class="search-bar">
                                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?></div>
    <div class="clearfix"></div><!-- navigation end -->
			
			<style>
			@media screen and (max-width: 1000px){
					.container {
						max-width: 100%;
					}
					
				.col-sm-7 {
					    display: flex;
    					justify-content: center;
					}
				}
				
				@media screen and (max-width: 700px) {
					.follow, .eng-date{
						display: none !important;
					}
					
					.container {
					    padding-bottom: 0px !important;
					}
				}
			</style>
			
			
			<script type="text/javascript">
				$(document).ready(function () {
					$(".fa-search").click(function () {
						$(".search-bar").toggle(function() {
							$(this).animate(500);
						},
						function() {
							$(this).animate(500);
						});
					});
				});
			</script>
			    
			