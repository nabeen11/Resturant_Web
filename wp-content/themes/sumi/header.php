<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sumi_Restaurant
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Nabin Adhikari">
    <link rel="profile" href="https://gmpg.org/xfn/11">


    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()) ?>/stylesheets/bootstrap.css">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()) ?>/stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()) ?>/stylesheets/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()) ?>/stylesheets/jquery.datetimepicker.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()) ?>/stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()) ?>/stylesheets/animate.css">

    <!-- Favicon and touch icons  -->
    <link href="<?php echo esc_url(get_template_directory_uri()) ?>/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon" sizes="48x48">
    <link href="<?php echo esc_url(get_template_directory_uri()) ?>/icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="<?php echo esc_url(get_template_directory_uri()) ?>/icon/favicon.png" rel="shortcut icon">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="header" class="header clearfix">
        <div class="header-wrap clearfix">
            <div class="container">
                <div class="logo-mobi"><a href="#"> <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/logo.png" alt="image"></a></div>
                <div class="btn-menu">
                    <span></span>
                </div>
                <nav id="mainnav" class="mainnav">
                <ul class="menu">
                <li class="logo">
                    <a href="index.html"> <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/logo.png" alt="image"></a>
                </li>
                </ul>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu' => 'left_menu',
                        'menu_class' => 'menu',
                        'container' => ''
                    ))
                    ?>
                </nav>
                <!--/.mainnav -->
            </div>
            <!--/.container -->
        </div>
        <!--/.header-wrap -->
    </header>
    <!--/.header -->