<?php get_header(); ?>
<?php
$terms = get_terms('menucategory', 'hide_empty=false');
?>

<!-- Page Title -->
<div class="page-title parallax parallax1 flat_strech">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Our menu</h1>
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

<section class="flat-row menu-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section style1 ">
                    <div class="top-section">
                        <p>Discover</p>
                    </div>
                    <h1 class="title">Menu Hot</h1>
                </div>
            </div>
            <!--col-md-12-->
        </div>
        <!--row-->

        <?php
        $args = array('post_type' => 'sumi_menu', 'posts_per_page' => 4);
        $da_query = new WP_Query($args);
        if ($da_query->have_posts()) {

        ?>
            <div class="row">
                <?php while ($da_query->have_posts()) {
                    $da_query->the_post() ?>
                    <div class="col-sm-3 col-xs-6">
                        <div class="product effect1">
                            <div class="box-wrap">
                                <div class="box-image">
                                    <a href="#"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="images" width="350" height="350"></a>
                                </div>
                                <div class="box-content">
                                    <h6><?php the_title() ?></h6>
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
<section class="flat-row flat-tab-menu menu-2">
    <div class="container">
        <div class="row">

        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-md-12 flat-tabs ">
                <div class="bg-tabs">
                    <div class="title-section style1 martp-0px">
                        <div class="top-section">
                            <p>Find About</p>
                        </div>
                        <h1 class="title marbt-33px ">Our Menu</h1>
                    </div>


                    <ul class="menu-tab">
                        <li class="active"><a href="#">Starters</a></li>
                        <li><a href="#">Dishes </a></li>
                        <li><a href="#">Deserts </a></li>
                        <li><a href="#">Fastfood </a></li>
                        <li><a href="#">Coffer </a></li>
                        <li><a href="#">Drinks </a></li>
                    </ul>



                </div>
                <!--/.bg-tabs-->
                <div class="flat-divider d67px"></div>

                <div class="content-tab">

                    <div class="content-inner">
                        <?php while (have_posts()) {
                            the_post();
                        ?>
                            <div class="col-md-6">
                                <ul class="menu-fd">
                                    <li>
                                        <div class="media-wrap flat-hover-moveright">
                                            <a href="#" class="pull-left">
                                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?> " alt="client" width="150" height="150" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="#"><?php the_title() ?></a></h6>
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
                        <?php } ?>
                        <!-- /.col-md-6" -->
                    </div>
                    <div class="content-inner">
                        <p>Coupling a blended linen construction with tailored style, the River Island HR Jasper Blazer will imprint a touch of dapper charm into your after-dark wardrobe. Our model is wearing a size medium blazer, and usually takes a size medium/38L shirt.</p>

                    </div><!-- /.content-inner -->
                </div><!-- /.content-tab -->

            </div>
            <!--flat-tabs-->

        </div>
        <!--row-->
    </div>
    <!--container -->
</section>
<section class="flat-row menu-3">
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