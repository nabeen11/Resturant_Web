<!-- Template Name: Reservation
 -->
<?php get_header(); ?>

<!-- Page Title -->
<div class="page-title parallax parallax1 flat_strech">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Reservation</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li> <a href="#">Home </a></li>
                            <!-- <li><a href="#">Our menu</a></li> -->
                        </ul>
                    </div>
                </div>
                <!-- /.page-title-captions -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>

<!-- Flat make resvervation -->
<section class="flat-row section1">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="reservation-page-right">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/maketrevation/1.png" class="img-responsive" alt="reservation-banner">
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

<!-- Flat client  -->
<section class="flat-row flat-clients s1">
    <div class="container">
        <div class="flat-client" data-item="4" data-nav="false" data-dots="false" data-auto="true" data-margin="30">

            <div class="item">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/clients/1.png" alt="images">
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/clients/2.png" alt="images">
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/clients/3.png" alt="images">
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/clients/4.png" alt="images">
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/clients/2.png" alt="images">
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/clients/3.png" alt="images">
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/clients/3.png" alt="images">
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri())?>/images/clients/4.png" alt="images">
                </a>
            </div>


        </div>
        <!-- /.flat-client -->
    </div>
</section>

<!-- Google Map -->
<div id="flat-map">

</div>
<!--flat-map -->

<?php get_footer(); ?>