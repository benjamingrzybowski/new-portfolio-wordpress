<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="shortcut icon" type="image/png" href="new-assets/favicon.jpg">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
            <label for="navi-toggle" class="navigation__button">
                    <span class="navigation__icon">&nbsp;</span>
            </label>
            <div class="navigation__background">&nbsp;</div>
            <nav class="navigation__nav">
                <?php 
                 $args = array(
                    'menu_class'        => 'navigation__list',
                    'theme_location'    => 'main_menu',
                    'add_li_class'      => 'navigation__item',
                 );    
                wp_nav_menu( $args );
                ?>
            </nav>
        </div>
        <header class="header">
                        <div class="bg-video">
                            <video class="bg-video__content" autoplay muted loop>
                                <source src="http://newportfolio.local.com/wp-content/uploads/2019/08/front-page-video.mp4" type="video/mp4">
                               video not supported by this browser
                            </video>
                        </div>
            <div class="header__logo-box">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo-2019.png" alt="sweet logo">
                </a>
            </div>
            <div class="header__text-box">               
                <h1 class="heading-primary">
                    <span class="heading-primary--big">Ben/G </span>
                    <span class="heading-primary--sm">Web Development</span>
                    <span class="heading-primary--sm">and</span>
                    <span class="heading-primary--sm">Design</span>
                </h1>
                <a class="btn btn--white btn--animated" id="help-btn">How can I help you? </a>
            </div>
        </header>
        <main>