 <?php get_template_part('template-parts/content', 'footer-layout-two');?>
   

        <section class="footer">

        
          <div class="container">
              <div class="row" style="display: flex; justify-content: space-between; width:100%">
                  <div class = "row1" style="display: block; text-align: center; flex: 1;">
                    <p style="color: white; font-size: 14px;">हटलाइनखबरमा प्रकाशित कुनै पनि विषयका सामाग्रीहरु (पुन : प्रकाशन) गर्नअघि अनुमति लिनुहुन अनुरोध छ।</p>
                    <p style="color: white; font-size: 12px"><b>© Shubham Media and Publications Pvt.Ltd </b></p>
                </div>

                  <div class="row2">
                    <div class="designby" style="text-align: right;">
                     डिजाइन बाइ : <a href="https://bigoinfotech.com"><span> B</span>igo</a>
                    </div>
                  </div>
              </div>
          </div>
        </section><div class="clearfix"></div><!-- footer end -->

        
    </section><div class="clearfix"></div><!-- main wrapper end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <?php wp_footer();?>
   
   <style>
        @media screen and (max-width: 768px) {
            .row2 {
                display: none;
            }
        }    
   </style>
   
    <script type="text/javascript">
    $(document).on('ready', function() {
      
      

      $('.autoplay').slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
		  arrows: true,
      });
     
    });
</script>

<!-- Responsive Tabs JS -->
    <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.responsiveTabs.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var $tabs = $('#horizontalTab');
            $tabs.responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                disabled: [3,4],
                click: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> clicked!');
                },
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                },
                activateState: function(e, state) {
                    //console.log(state);
                    $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
                }
            });

            $('#start-rotation').on('click', function() {
                $tabs.responsiveTabs('startRotation', 1000);
            });
            $('#stop-rotation').on('click', function() {
                $tabs.responsiveTabs('stopRotation');
            });
            $('#start-rotation').on('click', function() {
                $tabs.responsiveTabs('active');
            });
            $('#enable-tab').on('click', function() {
                $tabs.responsiveTabs('enable', 3);
            });
            $('#disable-tab').on('click', function() {
                $tabs.responsiveTabs('disable', 3);
            });
            $('.select-tab').on('click', function() {
                $tabs.responsiveTabs('activate', $(this).val());
            });

        });
    </script>

    
<script type="text/javascript">
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("site_navigation");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    jQuery(".sub-menu").css("display","none");
  } else {
    navbar.classList.remove("sticky");
    jQuery(".sub-menu").css("display","block");
  }
}

$(document).ready(function(){
	/*let maxHeight = 0;
	let footer = $('.footer-layout-two');
	let content = $(footer).find('.livenews_a');
content.each((i,v) => {
  if($(v).height() > maxHeight){
     maxHeight = $(v).height();
  }
});
content.height(maxHeight);
*/
  
	
	var condition = false;
		$('ul li').on('click', function(condition){ 
			if(!$(this).find('.hooker')){
				$(this).find('.sub-menu').css("display","block");
				$(this).addClass('hooker');
			}
			else{
				$(this).find('.sub-menu').css("display","none");
				$(this).removeClass('hooker');
			}
			
			
		})


})
</script>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1025815520891733";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129718192-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129718192-1');
</script>

<!-- <script>
    $(window).on('load', function(){
      $("#overlay").delay(4000).fadeOut();
      $("#backdrop").delay(4000).fadeOut();
    });
    
    $(document).ready(function(){
      $("#close-ad").click(function(){
        $("#overlay").hide();
        $("#backdrop").hide();
      });
    });
</script> -->

  </body>
</html>