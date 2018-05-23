

<!DOCTYPE html>
<html lang="zxx">

<?php include("system_config.php"); ?>	
<?php include("common/head.php"); ?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- header -->
        <!-- navbar -->
         <?php include("common/navbar.php"); ?> 
        <!-- //navbar ends here -->
        <!-- banner -->
        <div class="banner-bg-inner">
            <!-- banner-text -->
            <div class="banner-text-inner">
                <div class="container">
                    <h2 class="title-inner">
                       test-series
                    </h2>

                </div>
            </div>
            <!-- //banner-text -->
        </div>
        <!-- //banner -->
        <!-- breadcrumbs -->
        <div class="crumbs text-center">
            <div class="container">
                <div class="row">
                    <ul class="btn-group btn-breadcrumb bc-list">
                        <li class="btn btn1">
                            <a href="index.html">
                                <i class="glyphicon glyphicon-home"></i>
                            </a>
                        </li>
                        <li class="btn btn2">
                            <a href="about.html">Test Series</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
        <!-- about -->
        
        <!-- //about ends here -->
        <!-- about bottom -->
        <div class="about-bottom section">
            <div class="container-fluid">
                <h4 class="rad-txt">
                    <span class="abtxt1">PHY Academy</span>
                    <span class="abtext">Test Series</span>
                </h4>
                <!-- about-bottom grid1 -->
                <div class="col-md-12 about-bottom-right">
                    <p class="abt-p">From our past experience and the response of the students, these test series have been found to be highly useful for all  various entrance examinations. 
                    </p>
                    <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls">
                        
                   <?php for($i=1; $i<=5; $i++) { ?>        
                         <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
							<a href="#"><div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>Test Series <?php echo $i; ?></h5>
                                <p>loremipsum is a dummy text</p>
                            </div>
							</a>
                            <div class="clearfix"></div>
                        </div>
                    <?php  }  ?>    
                        
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls service2">
                       
                         <?php for($i=6; $i<=10; $i++) { ?>        
                         <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
							<a href="#"><div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                 <h5>Test Series <?php echo $i; ?></h5>
                                <p>loremipsum is a dummy text</p>
                            </div>
							</a>
                            <div class="clearfix"></div>
                        </div>
                    <?php  }  ?>   
                          
                        
                        
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- //about-bottom grid1 ends here -->
                
                <!-- //about-bottom grid3 ends here -->
                <!-- //Numscroller -->
                <div class="clearfix"></div>
            </div>
            <!-- //about container ends here-->
        </div>
        <!--//about bottom ends here-->
        <!-- team -->
        
        <!-- //team -->
        <!-- gallery -->
        
        <!-- //gallery -->
        <!--testimonials -->
        
        <!-- //testimonials-->
        <!-- footer-layouts -->
        <!--<div class="addon-sec section">
            <div class="container">
                <h4 class="rad-txt">
                    <span class="abtxt1">footer</span>
                    <span class="abtext">layouts</span>
                </h4>
                <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                    <a href="footer1.html">
                        <img src="<?php echo SITEPATH; ?>/web/images/f1.png" class="img-responsive" alt="chronicle-image">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                    <a href="footer2.html">
                        <img src="<?php echo SITEPATH; ?>/web/images/f2.png" class="img-responsive" alt="chronicle-image">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                    <a href="footer3.html">
                        <img src="<?php echo SITEPATH; ?>/web/images/f3.png" class="img-responsive" alt="chronicle-image">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                    <a href="footer4.html">
                        <img src="<?php echo SITEPATH; ?>/web/images/f4.png" class="img-responsive" alt="chronicle-image">
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>-->
        <!-- //footer-layouts -->
        <!-- footer -->
         <?php include("common/footer.php"); ?>
        <!-- //footer -->
         <?php include("common/copyright.php"); ?>
    </div>
    <!-- //home -->
    <!-- js -->
    <script src="<?php echo SITEPATH; ?>/web/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!--search jQuery-->
    <script src="<?php echo SITEPATH; ?>/web/js/main.js"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="<?php echo SITEPATH; ?>/web/js/minicart.js"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- gallery desoslide -->
    <script src="<?php echo SITEPATH; ?>/web/js/jquery.desoslide.min.js"></script>
    <script src="<?php echo SITEPATH; ?>/web/js/demo.js"></script>
    <!-- gallery desoslide -->
    <!-- Scrolling Nav JavaScript -->
    <script src="<?php echo SITEPATH; ?>/web/js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
    <!-- start-smooth-scrolling -->
    <script src="<?php echo SITEPATH; ?>/web/js/move-top.js"></script>
    <script src="<?php echo SITEPATH; ?>/web/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="<?php echo SITEPATH; ?>/web/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- about bottom grid Numscroller -->
    <script src="<?php echo SITEPATH; ?>/web/js/numscroller-1.0.js"></script>
    <!-- //about bottom grid Numscroller -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo SITEPATH; ?>/web/js/bootstrap.js"></script>
</body>

</html>