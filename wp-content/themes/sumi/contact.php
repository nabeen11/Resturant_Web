<!-- Template Name: Contact
 -->
<?php get_header(); ?>
<?php 
$address = myprefix_get_theme_option('address');
$telephone = myprefix_get_theme_option('telephone');
$email = myprefix_get_theme_option('email');
$opening_hours = myprefix_get_theme_option('opening_hours');
?>

    <!-- Page Title -->
    <div class="page-title parallax parallax1 flat_strech">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Contact</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li> <a href="#">Home </a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions -->                        
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div>  
<section class="flat-row contact-1 ">
    <div class="container">
        <div class="row">
            <div class="flat-information col-sm-4">
                <span class="fa fa-map-marker" aria-hidden="true"></span>
                <h5 class="information-title">ADDRESS</h5>
                <p class="address"><?php echo $address ?></p>
            </div>
            <div class="flat-information email col-sm-4">
                <span class="fa fa-envelope" aria-hidden="true"></span>
                <h5 class="information-title">EMAIL</h5>
                <a href="mailto:company@domain.com"><?php echo $email ?></a><br/>
            </div>
            <div class="flat-information phone col-sm-4">
                <span class="fa fa-phone" aria-hidden="true"></span>
                <h5 class="information-title">HOTLINE</h5>
                <a href="tel:+3484962216601"><?php echo $telephone ?></a><br/>
            </div>
        </div><!--  ./row -->
    </div><!-- ./container -->
</section>
  
<!-- Flat make resvervation -->
<section class="flat-row contact-2">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="reservation-page-right">
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/maketrevation/1.png" class="img-responsive" alt="reservation-banner"> 
                </div>
            </div><!--col-md-5-->

            <div class="col-md-7">
                <div class="reservation-page-left">

                    <div class="reservation-page-form"> 

                        <div class="title-section">
                            <h1 class="title">Contact Us</h1>
                        </div>

                        <form id="reservation-form" action="contact/contact-process.php" novalidate="novalidate">                                        
                            <div class="reservation-page-input-box">
                                <label>Your name</label>
                                <input type="text" class="form-control" placeholder="Full name" name="name" id="form-name" data-error="Subject field is required" required="">
                            </div>
                            <div class="reservation-page-input-box">
                                <label>Your email</label>
                                <input type="email" class="form-control" placeholder="Enter your email" name="email" id="form-email" data-error="Subject field is required" required="">
                            </div>
                            <div class="reservation-page-input-box">
                                <label>Phone number</label>
                                <input type="text" class="form-control" placeholder="Your phone" name="phone" id="form-phone" data-error="Subject field is required" required="">
                            </div>
                            <div class="reservation-page-input-box">
                                <label>Subjects</label>
                                <input type="text" class="form-control rt-date" placeholder="Subjects" name="subjects" id="form-subjects" data-error="Subject field is required" required="">
                            </div>

                            <div class="reservation-page-textarea">
                                <label>Message</label>
                                <textarea class="form-control your-message" placeholder="Your message" name="message" id="form-message"></textarea>
                            </div>

                            <div class="reservation-booking">
                                <button type="submit" class="book-now-btn">SUBMIT</button>
                            </div>

                        </form>                                 
                    </div>
                </div>
            </div><!--col-md-7-->
        </div><!--row-->
    </div><!--container -->
</section>

<!-- Google Map -->
<div id="flat-map">

</div><!--flat-map -->
<?php get_footer(); ?>