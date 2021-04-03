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

$facebook = myprefix_get_theme_option('facebook');
// echo $facebook;
$twitter = myprefix_get_theme_option('twitter');
$instagram = myprefix_get_theme_option('instagram');
$google = myprefix_get_theme_option('googleplus');
$pinterest = myprefix_get_theme_option('pinterest');
$linkedin = myprefix_get_theme_option('linkedin');
$address = myprefix_get_theme_option('address');
$phone = myprefix_get_theme_option('telephone');
$email = myprefix_get_theme_option('email');


?>
<footer class="footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget widget_text">
                        <h3 class="widget-title">About Us</h3>
                        <div class="textwidget">
                            <p>Sed ut perspiciatis unde omnis iste <br /> natus error sit voluptatem accusantium doloremque laudantium.</p>
                            <ul class="footer-info">
                                <li class="address"><?php echo $address ?></li>
                                <li class="email">Email us: <?php echo $email ?></li>
                                <li class="phone">Call us: <?php echo $phone ?></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <?php
                    $args = array('post_type' => 'sumi_blog', 'post__not_in' => array(get_the_ID()), 'posts_per_page' => 2);
                    $da_query = new WP_Query($args);
                    if ($da_query->have_posts()) {
                    ?>
                        <div class="widget widget_recent_posts">
                            <h3 class="widget-title">Latest Posts</h3>
                            <ul>
                                <?php while ($da_query->have_posts()) {
                                    $da_query->the_post() ?>
                                    <li class="clearfix">
                                        <div class="thumb flat-hover-images">
                                            <a href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="image" width="100" height="100"></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></h5>
                                            <div class="meta"><?php echo get_the_date() ?></div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div><!-- /.widget_recent_entries -->

                    <?php } ?>
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="widget widget-link clearfix">
                        <h3 class="widget-title">User Links </h3>

                        <ul class="links">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu' => 'left_menu',
                                'menu_class' => 'menu',
                                'container' => ''
                            ))
                            ?>
                        </ul>


                        <div class="social-links">
                            <a href="<?php echo $facebook ?>" target="_blank"><i class="fa fa-facebook-square"></i>Facebok</a>
                            <a href="<?php echo $twitter ?>" target="_blank"><i class="fa fa-twitter-square"></i>Twitter</a>
                            <a href="<?php echo $google ?>" target="_blank"><i class="fa fa-google-plus-square"></i>Google+</a>
                            <a href="<?php echo $linkedin ?>" target="_blank"><i class="fa fa-linkedin-square"></i>Linkedin</a>
                            <a href="<?php echo $instagram ?>" target="_blank"><i class="fa fa-instagram"></i>Instagram</a>
                            <a href="<?php echo $pinterest ?>" target="_blank"><i class="fa fa-pinterest-square"></i>Pinterest</a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <?php
                $args = array('post_type' => 'sumi_gallery', 'posts_per_page' => 6);
                $da_query = new WP_Query($args);
                if ($da_query->have_posts()) {

                ?>

                    <div class="col-md-3">
                        <div class="widget widget_instagram">
                            <h3 class="widget-title">Instagram</h3>
                                <ul class="clearfix">
                                <?php while ($da_query->have_posts()) {
                                $da_query->the_post(); ?>
                                    <li>
                                        <div class="thumb images-hover flat-hover-images">
                                            <a href="#">
                                                <span><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="image"></span>
                                            </a>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                        </div><!-- /.widget_instagram -->
                    </div><!-- /.col-md-3 -->
                <?php } ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-widgets -->

    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <div class="copyright-content">
                            Copyright © 2021. Designed by <a href=""> Nabin Adhikari</a>. All Rights Reserved</div>
                    </div>
                    <!-- Go Top -->
                    <a class="go-top-v1"> <i class="fa fa-arrow-up"></i> &nbsp;Back to Top</a>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-content -->
</footer>

</div>
<!--box -->

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