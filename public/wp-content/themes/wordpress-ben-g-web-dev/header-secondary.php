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
        <header class="header-secondary">
            <div class="header__logo-box">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo-2019.png" alt="sweet logo">
                </a>
            </div>
            <div class="header-secondary__text-box">               
                <h1 class="header-secondary-primary">
                    <span class="heading-primary--md">Ben G Web Design and Development</span>
                    <div id="slide-in-trigger"></div>
                </h1>
            </div>
        </header>
        <main>

