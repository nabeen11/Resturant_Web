<?php get_header();
the_post();
$tags = get_the_terms(get_the_id(), 'blogtag');
?>
<!-- Page Title -->
<div class="page-title flat_strech parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Our Blog</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li> <a href="#">Home </a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div><!-- /.page-title-captions -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<div class="main-content blog-single">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="content-wrap">
                    <article class="post">
                        <div class="header-post">
                            <h2 class="title-post"><a href="#"><?php the_title() ?></a></h2>
                            <p class="time-post"><?php the_date() ?> <a href="#">3 comments</a></p>
                        </div><!-- /.header-post -->

                        <div class="feature-post">
                            <a><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="image"></a>
                        </div><!-- /.feature-post -->

                        <div class="content-post">
                            <p> <?php the_content() ?>
                            </p>
                        </div><!-- /.content-post -->

                        <div class="direction clearfix">
                            <ul class="tags">
                                <li>Tags: </li>
                                <!-- <li><a href="#">example,</a></li> -->
                                <?php
                                foreach ($tags as $term) {
                                    $genre_link = get_term_link($term->term_id, 'blogtag');
                                    // echo '<li><a href="' .$genre_link.'">'.$term->name.' </a></li>';
                                    echo '<li><a  href="' . $genre_link . '">' . $term->name . ' | </a></li>';
                                }
                                ?>
                            </ul>

                            <div class="social-links">
                                <span>Share :</span>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="last" href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div><!-- /.direction -->
                    </article>
                </div><!-- /.content-post -->
            </div><!-- /.col-md-9 -->

            <div class="col-md-4">
                <div class="sidebars">
                    <div class="sidebars-wrap">
                        <div class="sidebar">
                            <div class="widget widget_search">
                                <h3 class="widget-title">Search</h3>
                                <form class="search-form">
                                    <input type="search" class="search-field" placeholder="Type & Hit Enter...">
                                    <input type="submit" class="search-submit">
                                </form>
                            </div><!-- /.widget_search -->

                            <div class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>
                                <?php $terms = get_terms('blogcategory', 'hide_empty=false'); ?>
                                <ul>
                                    <?php foreach ($terms as $term) { ?>
                                        <li><a href="#"><?php echo $term->name; ?></a></li>
                                        <?php $args = array(
                                            'post_type' => 'sumi_blog',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'blogcategory',
                                                    'field' => 'slug',
                                                    'terms' => $term->slug
                                                )
                                            )
                                        );
                                        $the_query = new WP_Query($args);
                                        while ($the_query->have_posts()) {
                                            $the_query->the_post();
                                        ?>
                                        <?php   } ?>
                                    <?php } ?>
                                </ul>
                            </div><!-- /.widget_categories -->
                            <?php
                            $args = array('post_type' => 'sumi_blog', 'post__not_in' => array(get_the_ID()), 'posts_per_page' => 3);
                            $da_query = new WP_Query($args);
                            if ($da_query->have_posts()) {
                            ?>
                                <div class="widget widget_recent_entries clearfix">
                                    <h3 class="widget-title">Recent Post</h3>
                                    <ul class="recent-post clearfix">
                                        <?php while ($da_query->have_posts()) {
                                            $da_query->the_post() ?>
                                            <li>
                                                <div class="thumb">
                                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="image" width="100" height="100">
                                                </div>
                                                <div class="text">
                                                    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                                                    <p><?php echo get_the_date() ?></p>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                    </ul>
                                </div><!-- /.widget_recent_entries -->

                                <div class="widget widget_tag">
                                    <h3 class="widget-title">Popular Tags</h3>
                                    <div class="tag-list">

                                    </div>
                                </div><!-- /.widget_tag -->
                        </div><!-- .sidebar -->
                    </div><!-- /.sidebars-wrap -->
                </div><!-- /.sidebars -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!--main-content -->

<!-- Google Map -->
<div id="flat-map">

</div>
<!--flat-map -->


<?php get_footer(); ?>