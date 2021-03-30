<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sumi_Restaurant
 */

?>
<footer class="footer">
    <div class="footer-widgets">        
        <div class="container">
            <div class="row"> 
                <div class="col-md-3">
                    <div class="widget widget_text">
                        <h3 class="widget-title">About Us</h3>          
                        <div class="textwidget">
                            <p>Sed ut perspiciatis unde omnis iste <br/> natus error sit voluptatem accusantium doloremque laudantium.</p>
                            <ul class="footer-info">
                                <li class="address">203, Envato Labs, Behind Alis Steet,
                                    Melbourne, Australia.</li>
                                <li class="email">Email us: company@domain.com</li>
                                <li class="phone">Call us: 0084 962 216 601</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="widget widget_recent_posts">      
                        <h3 class="widget-title">Latest Posts</h3>       
                        <ul>
                            <li class="clearfix">
                                <div class="thumb flat-hover-images">
                                    <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/blog/5.jpg" alt="image"></a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#">Whole Wheat & Soy Waffles Cake </a></h5>
                                    <div class="meta">19 September, 2016</div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="thumb flat-hover-images">
                                    <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/blog/6.jpg" alt="image"></a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#">Whole Wheat & Soy Waffles Cake</a></h5>
                                    <div class="meta">19 September, 2016</div>
                                </div>
                            </li>
                            
                        </ul>
                    </div><!-- /.widget_recent_entries -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="widget widget-link clearfix">
                        <h3 class="widget-title">User Links </h3>

                        <ul class="links">
                          <li><a href="#.">About Us</a></li>
                          <li><a href="#.">Blog</a></li>
                          <li><a href="#.">Courses </a></li>
                          <li><a href="#.">FAQs</a></li>
                          <li><a href="#.">Events</a></li>
                          <li><a href="#.">Support</a></li>
                        </ul>


                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook-square"></i>Facebok</a>
                            <a href="#"><i class="fa fa-twitter-square"></i>Twitter</a>
                            <a href="#"><i class="fa fa-google-plus-square"></i>Google+</a>
                            <a href="#"><i class="fa fa-linkedin-square"></i>Linkedin</a>
                            <a href="#"><i class="fa fa-instagram"></i>Instagram</a>
                            <a href="#"><i class="fa fa-pinterest-square"></i>Pinterest</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="widget widget_instagram">
                        <h3 class="widget-title">Instagram</h3>            

                        <ul class="clearfix">                                
                            <li>
                                <div class="thumb images-hover flat-hover-images">
                                    <a href="#">
                                        <span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/instagram/1.jpg" alt="image"></span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb images-hover flat-hover-images">
                                    <a href="#">
                                        <span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/instagram/2.jpg" alt="image"></span>
                                    </a>
                                </div>
                            </li>
                            <li class="last">
                                <div class="thumb images-hover flat-hover-images">
                                    <a href="#">
                                        <span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/instagram/3.jpg" alt="image"></span>
                                    </a>
                                </div>
                            </li>
                            <li class="last">
                                <div class="thumb images-hover flat-hover-images">
                                    <a href="#">
                                        <span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/instagram/4.jpg" alt="image"></span>
                                    </a>
                                </div>
                            </li>

                            <li class="last">
                                <div class="thumb images-hover flat-hover-images">
                                    <a href="#">
                                        <span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/instagram/5.jpg" alt="image"></span>
                                    </a>
                                </div>
                            </li>

                            <li class="last">
                                <div class="thumb images-hover flat-hover-images">
                                    <a href="#">
                                        <span><img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/instagram/6.jpg" alt="image"></span>
                                    </a>
                                </div>
                            </li>
                        </ul>  

                    </div><!-- /.widget_instagram -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->    
        </div><!-- /.container -->
    </div><!-- /.footer-widgets -->

    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <div class="copyright-content">
                         Copyright © 2017. Designer by <a href="themesflat.com"> NthPsd</a>. All Rights Reserved</div>
                     </div>
                     <!-- Go Top -->
                     <a class="go-top-v1"> <i class="fa fa-arrow-up"></i>  &nbsp;Back to Top</a>
                 </div><!-- /.col-md-12 -->
             </div><!-- /.row -->
         </div><!-- /.container -->
     </div><!-- /.footer-content -->
 </footer>

 </div><!--box -->

 <!-- Javascript -->
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery.min.js"></script>
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery.datetimepicker.full.min.js"></script> 
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/bootstrap.min.js"></script> 
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery.easing.js"></script> 
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/imagesloaded.min.js"></script> 
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery.isotope.min.js"></script>
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery-waypoints.js"></script> 
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery.magnific-popup.min.js"></script>   
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery.cookie.js"></script>
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/parallax.js"></script>
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/smoothscroll.js"></script>   
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery.flexslider-min.js"></script>
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/owl.carousel.js"></script>
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery-validate.js"></script>
 <!-- <script type="text/javascript" src="javascript/switcher.js"></script> -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvV0EE3yFozGhjmUv3BgoyviVdXzCwHlk"></script>
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/gmap3.min.js"></script>  
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery.fancybox.js"></script>
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/main.js"></script>

 <!-- Revolution Slider -->
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery.themepunch.tools.min.js"></script>
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/jquery.themepunch.revolution.min.js"></script>
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()) ?>/javascript/slider.js"></script>

<?php wp_footer(); ?>

</body>
</html>
