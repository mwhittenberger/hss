<?php
/**
 * The template for displaying the header
 *
 *
 * @package WordPress
 * @subpackage Lamark Media
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="icon" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/favicon.ico">

    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>








    <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC:400,500,600,700,900&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

<div class="site-wrapper">
    <div class="outer-container header">
        <div class="header-inner inner-container">
            <div class="logo-column">
                <div class="cool-wrap">
                    <a href="/"><img src="/wp-content/uploads/2020/02/logo_transparent3.png" alt="get home security system quotes"></a>
                </div>
            </div>
            <div class="info-column">
                <div class="phone-label">Call Now</div>
                <a href="tel:8889971991" class="phone-number">888-997-1991</a>
            </div>
        </div>
    </div>
    <div class="outer-container hero">
        <div class="hero-inner" style="padding-bottom:0;justify-content: center;width:100%;">
            <div class="hero-text--column" style="width:auto;">
                <div class="dt-logos">
                    <div class="logos-wrapper">
                        <div><img src="/wp-content/uploads/2020/02/adt-security-services-logo-white.png" alt="ADT Home Security Services"></div>
                        <div><img src="/wp-content/uploads/2020/02/new-vivint-logo-white.png" alt="Vivint Security Services"></div>
                        <div><img src="/wp-content/uploads/2020/02/Security-Flip@3x-white.png" alt="Safe Home Security"></div>
                        <div><img src="/wp-content/uploads/2020/02/brinks-security-logo-no-backg-white.png" alt="Brinks Home Security Services"></div>
                        <div><img src="/wp-content/uploads/2020/03/CoreHome-50h-2.png" alt="Core Home Security"></div>
                    </div>
                </div>

            </div>
            

        </div>

        <div class="main-content--inner inner-container follow-up">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="dimmer"></div>
    </div>