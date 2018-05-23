

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
                        contact us
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
                            <a href="contact.html">contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
        <!-- contact -->
        <div class="section contact" id="contact">
            <div class="container">
                <h4 class="rad-txt text-center">
                    <span class="abtxt1">contact</span>
                    <span class="abtext">us</span>
                </h4>
                <div class="contact-form">
                    <div class="col-md-6">
                        <!-- contact form grid -->
                        <div class="contact-top1">
                            <h5>send us a note</h5>
                            <form action="#" class="form_w3layouts" method="post">
                                <input type="text" placeholder="First Name" required="">
                                <input type="text" placeholder="Last Name" required="">

                                <input class="email" type="email" placeholder="Email" required="">
                                <textarea placeholder="Message" required></textarea>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                        <!--  //contact form grid ends here -->
                    </div>
                    <!-- contact map grid -->
                    <div class="col-md-6 map contact-right">
                        <div class="contact-top1">
                            <h5>get directions</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.2833434006393!2d75.79399741498995!3d26.862737483149175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5cd5d104253%3A0x71a0eca8b48773ee!2sPHY+Academy!5e0!3m2!1sen!2sin!4v1526987012744"
                                allowfullscreen></iframe>
                                
                               
                        </div>
                    </div>
                    <!--//contact map grid ends here-->
                    <div class="clearfix"></div>
                </div>
                <!-- contact details -->
                <div class="contact-bottom">
                    <h6>contact info</h6>
                    <!-- contact details left -->
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-left">
                            <div class="address">
                                <h5>Address:</h5>
                                <p>
                                    2nd Floor, Mendiratta Square, Below Gopalpura Flyover, Himmat Nagar, Tonk Road
                                    <br> Jaipur - 302015 (Rajasthan)</p>
                            </div>
                            <div class="address address-mdl">
                                <h5>phone:</h5>
                                <p>
                                   +91-9672506888</p>
                                <p>
                                   +91-9828506888</p>
                            </div>
                        </div>
                    </div>
                    <!-- //contact details left -->
                    <!-- contact details right -->
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-right">
                            <div class="address">
                                <h5>Email:</h5>
                                <p>
                                    <a href="mailto:mail@phyacademyjpr.com">mail@phyacademyjpr.com</a>
                                </p>
                                <p>
                                    <a href="mailto:mail@phyacademyjpr.com">mail@phyacademyjpr.com</a>
                                </p>
                            </div>
                            <div class="footer-social address  address-mdl">
                                <h5>let's get social</h5>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-facebook icon_facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-twitter icon_twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-dribbble icon_dribbble"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-google-plus icon_g_plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- //contact-details right -->
                    <div class="clearfix"></div>
                </div>
                <!-- //contact details ends here -->
            </div>
        </div>
        <!-- //contact -->
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
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo SITEPATH; ?>/web/js/bootstrap.js"></script>
</body>

</html>