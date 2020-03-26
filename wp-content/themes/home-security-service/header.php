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
        <div class="hero-inner inner-container">
            <div class="hero-text--column">
                <div class="dt-logos">
                    <div class="logos-wrapper">
                        <div><img src="/wp-content/uploads/2020/02/adt-security-services-logo-white.png" alt="ADT Home Security Services"></div>
                        <div><img src="/wp-content/uploads/2020/02/new-vivint-logo-white.png" alt="Vivint Security Services"></div>

                        <div><img src="/wp-content/uploads/2020/02/brinks-security-logo-no-backg-white.png" alt="Brinks Home Security Services"></div>
                        <div><img src="/wp-content/uploads/2020/03/CoreHome-50h-2.png" alt="Core Home Security"></div>
                    </div>
                </div>
                <h1 class="hero-title">Your Home is Your Most Valuable Investment:<br><span>PROTECT IT</span></h1>

                <p>We can help by finding you the deepest discounts on Home Security Systems
                </p>

                <ul>
                    <li><span>Offers you won't find anywhere else on Home Security</span></li>
                    <li><span>Get Home Owner Discounts with Active Alarm Security</span></li>
                    <li><span>Customize your Security System</span></li>
                </ul>
            </div>
            <div class="hero-form--column">
                <a name="form" id="the-form"></a>
                <div class="form-wrapper">
                    <div class="form-inner">
                        <div class="form-title">Find the Ultimate Deals on Home Security</div>
                        <div class="form-content">
                            <div class="form-wrapper--inner">
                                    <?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
                            </div>
                        </div>
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