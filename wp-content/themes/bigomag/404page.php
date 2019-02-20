<?php
/**
Template Name: 404page
*/

?>
<?php get_header();?>

        <section class="error_page">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="site_error" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/Error.png);" class="img-responsive">
                  
                </div>
              </div>

              <div class="col-md-6">
                <div class="error_content">
                    <h2>Oops</h2>
                    <h4>PAGE NOT FOUND ON SERVER</h4>
                    <p>The link you followed is either outdated, inaccurate or the server has been instructed not to let you have it.</p><div class="clearfix"></div>

                    <div class="home_page">
                      <a href=""> Go To Home </a>
                    </div><div class="clearfix"></div>

                </div>
              </div>
            </div>
          </div>
        </section><div class="clearfix"></div><!-- 404 page end -->

        <?php get_footer();?>