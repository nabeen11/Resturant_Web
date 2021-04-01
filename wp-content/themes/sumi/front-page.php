<?php get_header(); ?>

<section class="flat-row flat-our">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/imagebox/1.png" alt="images">
            </div>
            <!--col-md-6-->

            <div class="col-md-6">
                <div class="flat-divider d96px"></div>
                <div class="wrap-content-story">
                    <div class="title-section style2 ">
                        <h1 class="title">Our Story</h1>
                    </div>
                    <p class="content-story">Sumi is a restaurant, bar and coffee roastery located on a busy corner site in Farringdon's Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and a bustling.</p>
                    <ul class="iconlist">
                        <li><i class="fa fa-circle-o"></i> Sumi is a restaurant, bar and coffee roastery located </li>
                        <li><i class="fa fa-circle-o"></i> Sumi is a restaurant, bar and coffee </li>
                        <li><i class="fa fa-circle-o"></i> Sumi is a restaurant, bar and coffee roastery located on a Sumi </li>
                        <li><i class="fa fa-circle-o"></i> restaurant, bar and coffee roastery located </li>
                    </ul>
                </div>
            </div>
            <!--/.col-md-6-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container -->
</section>
<?php
$args = array('post_type' => 'sumi_menu', 'posts_per_page' => 3);
$da_query = new WP_Query($args);
if ($da_query->have_posts()) {

?>
    <section class="flat-row flat-imagebox index-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style2 ">
                        <div class="top-section">
                            <p>Discover</p>
                        </div>
                        <h1 class="title">Menu Hot</h1>
                    </div>
                </div>
                <!--col-md-12-->
            </div>
            <!--row-->

            <div class="row">
                <div class="flat-divider d10px"></div>
                <?php while ($da_query->have_posts()) {
                    $da_query->the_post() ?>
                    <div class="item">
                        <div class="imagebox effect1">
                            <div class="box-wrap">
                                <div class="box-image">
                                    <a href="#"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="images" width="350" height="350"></a>
                                </div>
                                <div class="box-content">
                                    <h5><?php the_title() ?></h5>
                                    <ul>
                                        <li><?php echo get_post_meta(get_the_ID(), '_foodvalue', true)  ?></li>
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
                <?php  } ?>
            </div>
        <?php  } ?>
        <!--row-->
        </div>
        <!--container -->
    </section>

    <!-- Flat Tab-->
    <section class="flat-row flat-tab-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section">
                        <div class="top-section">Find About</div>
                        <h1 class="title">Our Menu</h1>
                    </div>
                </div>
                <!--/.col-md-12-->
            </div>
            <!--/.row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="flat-tabs">
                        <?php
                        $terms = get_terms('menucategory', 'hide_empty=false'); ?>
                        <ul class="menu-tab">
                            <?php foreach ($terms as $term) {   ?>
                                <li class="active"><a href="#"><?php echo $term->name; ?></a></li>
                                <?php $args = array(
                                    'post_type' => 'sumi_menu',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'menucategory',
                                            'field' => 'slug',
                                            'terms' => $term->slug
                                        )
                                    )
                                );
                                $the_query = new WP_Query($args);
                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                                ?>
                                    <!-- <li><a href="#">Dishes </a></li>
                        <li><a href="#">Deserts </a></li>
                        <li><a href="#">Fastfood </a></li>
                        <li><a href="#">Coffer </a></li>
                        <li><a href="#">Drinks </a></li> -->
                                <?php   } ?>
                            <?php } ?>
                        </ul>
                        <div class="content-tab">
                            <div class="content-inner">
                                <div class="col-md-6">
                                    <ul class="menu-fd">
                                        <li>
                                            <div class="media-wrap flat-hover-moveright">
                                                <a href="#" class="pull-left">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/menufood/1.png" alt="client" class="img-responsive">
                                                </a>
                                                <div class="media-body">
                                                    <h6><a href="#"><?php echo get_the_title() ?></a></h6>
                                                    <div class="dotted-bg"></div>
                                                    <span><?php echo get_post_meta(get_the_ID(), '_foodvalue', true) ?></span>
                                                </div>
                                                <?php
                                                $terms = get_terms('menuingredent', 'hide_empty=false');  ?>
                                                <ul class="menu-in">
                                                    <?php foreach ($terms as $term) {   ?>
                                                        <li><?php echo $term->name; ?></li>
                                                        <?php $args = array(
                                                            'post_type' => 'sumi_menu',
                                                            'tax_query' => array(
                                                                array(
                                                                    'taxonomy' => 'menuingredent',
                                                                    'field' => 'slug',
                                                                    'terms' => $term->slug
                                                                )
                                                            )
                                                        );
                                                        $the_query = new WP_Query($args);
                                                        while ($the_query->have_posts()) {
                                                            $the_query->the_post();
                                                        ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                                <!-- /.col-md-6" -->
                            </div>
                            <!-- /.content-inner -->
                            <!-- 
                        <div class="content-inner">
                            <p>Coupling a blended linen construction with tailored style, the River Island HR Jasper Blazer will imprint a touch of dapper charm into your after-dark wardrobe. Our model is wearing a size medium blazer, and usually
                                takes a size medium/38L shirt.</p>

                        </div> -->
                            <!-- /.content-inner -->
                        </div>
                        <!-- /.content-tab -->
                    </div>
                    <!--flat-tabs-->
                </div>
                <!--/.col-md-12-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container -->
    </section>

    <?php
    $args = array('post_type' => 'sumi_gallery', 'posts_per_page' => 6);
    $da_query = new WP_Query($args);
    if ($da_query->have_posts()) {

    ?>
        <!-- Flat projects portfolio -->
        <section class="flat-row flat-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section style1 ">
                            <div class="top-section">
                                <p>Discover</p>
                            </div>
                            <h1 class="title">Gallery Photo</h1>
                        </div>
                    </div>
                    <!--col-md-12-->
                </div>
                <!--row-->
                <?php
                $terms = get_terms('Categories', 'hide_empty=false');
                // print_r($terms)
                ?>
                <div class="row">
                    <div class="flat-projects-portfolio ">
                        <ul class="portfolio-filter">
                            <?php foreach ($terms as $term) {   ?>
                                <li class="active"><a data-filter="*" href="#"><?php echo $term->name; ?></a></li>
                                <?php $args = array(
                                    'post_type' => 'sumi_gallery',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'Categories',
                                            'field' => 'slug',
                                            'terms' => $term->slug
                                        )
                                    )
                                );
                                $the_query = new WP_Query($args);
                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                                ?>
                                    <!-- <li class=""><a data-filter=".find" href="#">Fine Dining</a></li>
                            <li class=""><a data-filter=".coffe" href="#">Coffee Shop</a></li>
                            <li class=""><a data-filter=".drink" href="#"> Drink & Bar </a></li>
                            <li class=""><a data-filter=".catering" href="#"> Catering Services </a></li> -->
                                <?php   }
                                ?>
                            <?php
                            }
                            ?>
                        </ul>



                        <!-- /.project-filter -->

                        <div class="projects-portfolio clearfix">
                            <?php while ($da_query->have_posts()) {
                                $da_query->the_post(); ?>

                                <div class="projects-portfolio-wrap houses">
                                    <div class="item">
                                        <div class="portfolio-img flat-hover-images">
                                            <a href="gallery-list.html"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="image" ></a>
                                        </div>
                                    </div>
                                    <!-- /.item -->
                                </div>

                            <?php } ?>
                            <!-- /.projects-portfolio-wrap -->
                        </div>
                        <!-- /.projects-portfolio -->
                    </div>

                    <div class="read-more view-all">
                        <a href="#">View All Gallery</a>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container -->
        </section>
    <?php } ?>

    <!-- Flat make resvervation -->
    <section class="flat-row flat-make-res index-2">
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

<!-- Flat latest new -->
<section class="flat-row flat-latest-new">
            <div class="container">
                <div class="row">
                    <div class="blog-shortcode blog-slist">

                        <article class="post col-md-6 clearfix">
                            <div class="title-section style4">
                                <h1 class="title">Latest <span>News</span> </h1>
                                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                            </div>

                            <div class="content-post">
                                <div class="entry-meta">19 September, 2016</div>

                                <h3 class="title-post"><a href="#">White chocolate & cookies</a></h3>

                                <div class="entry-post excerpt">
                                    <p>Aenean condimentum commodo mattis viverra erat volutpat.</p>
                                    <div class="read-more">
                                        <a href="#">Read more                                          
                                </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.content-post -->
                        </article>

                        <article class="post col-md-6 clearfix">
                            <div class="flat-video-fancybox">
                                <!--  <div class="overlay"></div> -->
                                <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/2JJtXLUhtVs">
                                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/blog/sh3.jpg" alt="images">
                                </a>
                            </div>
                        </article>

                        <article class="post col-md-6 clearfix">
                            <div class="featured-post">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/blog/sh1.jpg" alt="image">
                            </div>

                            <div class="content-post bgffff">
                                <div class="entry-meta">19 September, 2016</div>

                                <h3 class="title-post"><a href="#">You don't need a sliver</a></h3>

                                <div class="entry-post excerpt">
                                    <p>Aenean condimentum commodo mattis viverra erat volutpat.</p>
                                    <div class="read-more">
                                        <a href="#">Read more                                          
                            </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.content-post -->
                        </article>

                        <article class="post col-md-6 clearfix">
                            <div class="featured-post">
                                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/blog/sh2.jpg" alt="image">
                            </div>

                            <div class="content-post bgffff">
                                <div class="entry-meta">19 September, 2016</div>

                                <h3 class="title-post"><a href="#">Asian seafood salad</a></h3>

                                <div class="entry-post excerpt">
                                    <p>Aenean condimentum commodo mattis viverra erat volutpat.</p>
                                    <div class="read-more">
                                        <a href="#">Read more                                          
                            </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.content-post -->
                        </article>


                    </div>
                </div>
                <!--row-->
            </div>
            <!--container -->
        </section> <br>

    <?php

    $args = array('post_type' => 'sumi_testimonial', 'posts_per_page' => 3);
    $da_query = new WP_Query($args);
    if ($da_query->have_posts()) {


    ?>
        <!-- Flat testimonial -->
        <section class="flat-row flat-testimonial index-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section margb-27px">
                            <h1 class="title">Our Customers Say</h1>
                        </div>
                    </div>
                    <!--col-md-12-->
                </div>
                <!--row-->

                <div class="row">
                    <div class="col-md-12">

                        <div class="flat-carousel">
                            <div class="owl-carousel-services">
                                <?php while ($da_query->have_posts()) {
                                    $da_query->the_post();
                                ?>
                                    <div class="item-owl">
                                        <div class="blockquote-testimo">
                                            <p><?php the_content() ?></p>
                                        </div>
                                        <div class="title-testimonial">
                                            <h6 class="title"><a href="#"><?php the_title() ?></a></h6>
                                            <h6><?php the_excerpt() ?></h6>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!--/.owl-carousel-services-v2-->
                        </div>
                        <!--/.flat-carousel-v2-->
                    </div>
                    <!--/.col-md-12-->
                </div>
                <!--/.row-->
            </div>
            <!--/.container -->
        </section>
    <?php } ?>
    <!-- Google Map -->
    <div id="flat-map">

    </div>
    <!--flat-map -->
























    <?php get_footer(); ?>