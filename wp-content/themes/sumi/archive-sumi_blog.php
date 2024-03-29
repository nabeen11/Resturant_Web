<?php get_header();
the_post();
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
<?php $args = array('post_type' => 'sumi_blog', 'posts_per_page' => 3);
            $da_query = new WP_Query($args);
            if ($da_query->have_posts()) { ?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="content-wrap">
                <?php while ($da_query->have_posts()) {
                    $da_query->the_post() ?>
                        <article class="post">
                            <div class="header-post">
                                <h2 class="title-post"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                <p class="time-post"><?php echo get_the_date() ?> <a href="#">3 comments</a></p>
                            </div><!-- /.header-post -->

                            <div class="feature-post">
                                <a href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="image"></a>
                            </div><!-- /.feature-post -->

                            <div class="content-post">
                                <p>
                                    <?php the_excerpt() ?>
                                </p>

                                <div class="readmore">
                                    <a href="<?php the_permalink() ?>">Continue reading...</a>
                                </div>

                                <div class="meta-post clearfix">
                                    <div class="by-author">
                                        <a href="#">By <?php echo get_the_author(); ?> </a>
                                    </div>

                                    <div class="social-links">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </div>

                                    <div class="leave-comment">
                                        <a href="#">Leave a Comment </a>
                                    </div>
                                </div>
                            </div><!-- /.content-post -->
                        </article>
                    <?php }
                    ?>
                    <div class="clearfix"></div>
                    <nav class="navigation paging-navigation pager" role="navigation">
                        <div class="pagination loop-pagination">
                            <a class="paging-next" href="#">OLDER POSTS <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </nav>
                    
                </div><!-- /.content-wrap -->
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
                                        <li><a href="<?php the_permalink(); ?>"><?php echo $term->name; ?></a></li>
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

                            <div class="widget widget_recent_entries clearfix">
                                <h3 class="widget-title">Recent Post</h3>

                                <ul class="recent-post clearfix">
                                    <?php while (have_posts()) {
                                        the_post();
                                    ?>
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
                                </ul>
                            </div><!-- /.widget_recent_entries -->
                            <div class="widget widget_tag">
                                    <h3 class="widget-title">Popular Tags</h3>
                                    <?php $terms = get_terms('blogtag', 'hide_empty=false'); ?>
                                    <div class="tag-list">
                                        <?php foreach ($terms as $term) {   ?>
                                            <a class="active" href="#"><?php echo $term->name; ?> |</a>
                                            <?php $args = array(
                                                'post_type' => 'sumi_blog',
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'blogtag',
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
                                    </div>
                                </div><!-- /.widget_tag -->

                        </div><!-- .sidebar -->
                    </div><!-- /.sidebars-wrap -->
                </div><!-- /.sidebars -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<?php  } ?>
<!--main-content -->

<!-- Google Map -->
<div id="flat-map">

</div>
<!--flat-map -->
<?php get_footer(); ?>