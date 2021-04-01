<?php get_header();
the_post(); ?>

<!-- Page Title -->
<div class="page-title parallax parallax1 flat_strech">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Menu Single</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li> <a href="#">Home </a></li>
                            <li><a href="#">Our menu</a></li>
                        </ul>
                    </div>
                </div><!-- /.page-title-captions -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<!-- Flat row -->
<div class="flat-row flat-wooc">
    <div class="container">
        <div class="row">
            <div class="woocommerce-page clearfix">
                <div class="col-md-6">
                    <div class="flat-product-single-slider">
                        <div id="flat-product-flexslider">
                            <ul class="slides">
                                <li><img width="570" height="570" alt="product-single" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/shop/1.jpg" class="attachment-themesflat-gallery-product size-themesflat-gallery-product" /></li>
                                <li><img width="570" height="570" alt="product-single" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/shop/5.jpg" class="attachment-themesflat-gallery-product size-themesflat-gallery-product" /></li>
                                <li><img width="570" height="570" alt="product-single" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/shop/6.jpg" class="attachment-themesflat-gallery-product size-themesflat-gallery-product" /></li>
                                <li><img width="570" height="570" alt="product-single" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/shop/7.jpg" class="attachment-themesflat-gallery-product size-themesflat-gallery-product" /></li>
                            </ul>
                        </div>
                        <div id="flat-product-carousel">
                            <ul class="slides">
                                <li><img width="100" height="100" alt="product-single" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/shop/1.jpg" /></li>
                                <li><img width="100" height="100" alt="product-single" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/shop/5.jpg" /></li>
                                <li><img width="100" height="100" alt="product-single" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/shop/6.jpg" /></li>
                                <li><img width="100" height="100" alt="product-single" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/shop/7.jpg" /></li>
                            </ul>
                        </div>
                    </div><!-- /.flat-portfolio-single-slider -->
                </div>
                <!--/.col-md-6 -->

                <div class="col-md-6">
                    <div class="entry-summary">
                        <h2 class="product_title"><?php the_title(); ?></h2>

                        <ul class="favorite">
                            <li>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                            </li>
                        </ul>

                        <p class="price"><?php echo get_post_meta(get_the_ID(), '_foodvalue', true) ?></p>

                        <div class="description">
                            <p><?php the_content() ?></p>
                        </div>
                        <!-- <form class="cart clearfix" method="post"> -->
                        <button type="submit" class="single_booking_button">Order now</button>
                        <!-- </form> -->


                        <ul class="flat-socials">
                            <li>Share link: </li>
                            <li class="twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="linkin">
                                <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div><!-- /.entry-summary -->
                </div>
                <!--/.col-md-8 -->

            </div>
            <!--/.woocommerce-page -->
        </div>
        <!--/.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="flat-accordion">
                    <div class="flat-toggle">
                        <h4 class="toggle-title active">DESCRIPTION</h4>
                        <div class="toggle-content">
                            <p><?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div><!-- /toggle -->


                </div><!-- /.flat-accordion -->
            </div>
            <!--/.col-md-12 -->
        </div>
        <!--/.row -->
        <!--  <div class="flat-divider d62px"></div> -->
    </div>
    <!--/.container -->
</div>
<!--/.flat-row -->

<div class="related products-row">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="title-section style5">
                    <h1 class="title">Related Products</h1>
                </div>
            </div>
            <!--/.col-md-12-->
        </div>

        <div class="row">
            <div class="related products clearfix">
                <?php 
                $args = array('post_type'=>'sumi_menu','post__not_in' => array(get_the_ID()),'posts_per_page' =>4);
                $da_query = new WP_Query($args);
                if ($da_query->have_posts()){

                
                ?>
                <?php while ($da_query->have_posts()) {
                                            $da_query->the_post() ?>
                <div class="col-sm-3 col-xs-6 style2">
                    <div class="product effect1">
                        <div class="box-wrap">

                            <div class="box-image">
                                <a href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="images" width="350" height="350"></a>
                            </div>
                            <div class="box-content">
                                <h6><?php the_title() ?></h6>
                                <ul>
                                    <li><?php echo get_post_meta(get_the_ID(),'_foodvalue',true) ?></li>
                                    <li>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php }?>


            </div><!-- /.related products -->
        </div><!-- /.row -->

        <div class="flat-divider d47px"></div>
        <div class="kf_property_line1"></div>
    </div><!-- /.container -->
</div>

<!-- Flat make resvervation -->
<section class="flat-row menu-single2">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="reservation-page-right">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/maketrevation/1.png" class="img-responsive" alt="reservation-banner">
                </div>
            </div>
            <!--col-md-5-->

            <div class="col-md-7">
                <div class="reservation-page-left">

                    <div class="reservation-page-form">

                        <div class="title-section">
                            <div class="top-section">
                                <p>Well come to Sumi Restaurant</p>
                            </div>
                            <h1 class="title">Make a Reservation</h1>
                        </div>

                        <ul>
                            <li>Monday to Tuesday <span>09:00 AM - 22:00 PM</span> </li>
                            <li>Friday to Sunday <span>11:00 AM - 20:00 PM</span></li>
                        </ul>

                        <h1 class="phone">+12345 678 910</h1>

                        <h3><span>Book a table</span></h3>

                        <form id="reservation-form" action="contact/contact-process.php">
                            <div class="reservation-page-input-box">
                                <label>Your name</label>
                                <input type="text" class="form-control" placeholder="Full name" name="name" id="form-name" data-error="Subject field is required" required="">
                            </div>
                            <div class="reservation-page-input-box">
                                <label>Time</label>
                                <span class="fa fa-calendar date_picker" aria-hidden="true">
                                    <input type="text" placeholder="03/09/2017" name="datepicker" id="date-picker" data-error="Subject field is required" required=""> </span>
                                <span class="fa fa-clock-o time_picker" aria-hidden="true">
                                    <input type="text" placeholder="06:00" name="timepicker" id="time-picker" data-error="Subject field is required" required="">
                                </span>
                            </div>
                            <div class="reservation-page-input-box">
                                <label>Phone number</label>
                                <input type="text" class="form-control" placeholder="Your phone" name="phone" id="form-phone" data-error="Subject field is required" required="">
                            </div>
                            <div class="reservation-page-input-box">
                                <label>Seats</label>
                                <input type="text" class="form-control rt-date" placeholder="6 persons" name="date" id="form-date" data-error="Subject field is required" required="">
                            </div>

                            <div class="reservation-booking">
                                <button type="submit" class="book-now-btn">Booking now</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
            <!--col-md-7-->
        </div>
        <!--row-->
    </div>
    <!--container -->
</section>

<!-- Google Map -->
<div id="flat-map">

</div>
<!--flat-map -->






<?php get_footer(); ?>