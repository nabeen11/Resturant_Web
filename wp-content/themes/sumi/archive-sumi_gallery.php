<?php get_header(); ?>

<!-- Page Title -->
<div class="page-title flat_strech parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                    
                <div class="page-title-heading">
                    <h1 class="title">Gallery</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li> <a href="#">Home </a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>                   
                    </div>
                </div><!-- /.page-title-captions -->                        
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div>  

<!-- Flat projects portfolio -->
<section class="flat-row gallery-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section style1 ">
                    <h1 class="title">Gallery Photo</h1>
                </div>
            </div><!--col-md-12-->
        </div><!--row-->

        <div class="row">
         
         <div class="flat-projects-portfolio ">
            <ul class="portfolio-filter">
                <li class="active"><a data-filter="*" href="#">All Gallery </a></li>
                <li class=""><a data-filter=".find" href="#">Fine Dining</a></li>
                <li class=""><a data-filter=".coffe" href="#">Coffee Shop</a></li>
                <li class=""><a data-filter=".drink" href="#"> Drink & Bar  </a></li>
                <li class=""><a data-filter=".catering" href="#"> Catering Services  </a></li>
            </ul><!-- /.project-filter -->

            <div class="projects-portfolio"> 
            <?php while(have_posts()){
                the_post();
             ?>
                <div class="projects-portfolio-wrap">
                    <div class="item houses find" >
                        <div class="portfolio-img flat-hover-images">
                            <a href="gallery-list.html"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" alt="image"></a>
                            
                        </div>
                    </div>
                </div><!-- /.projects-portfolio-wrap -->  
                <?php  } ?>
            </div><!-- /.projects-portfolio -->
        </div>
        
    </div><!--row-->
</div><!--container -->
</section>

<!-- Google Map -->
<div id="flat-map">
    
</div><!--flat-map -->


<?php get_footer() ;?>