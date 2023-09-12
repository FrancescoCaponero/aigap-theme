<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/nor3fxr.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="masthead" class="site-header">
    <!-- Hamburger Icon -->
    <nav id="site-navigation" class="main-navigation">
       
        <div class="custom-logo-header">
            <?php 
                if ( has_custom_logo() ) {
                    echo the_custom_logo(); 
                };
            ?>
        </div>

        <!-- Close Icon -->
        <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        ) );
        ?>
         <div id="hamburger" class="pointer ham">
            <svg id="open" xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 38 26" fill="none">
                <rect width="38" height="6" fill="#272838"/>
                <path d="M0 20H38V26H0V20Z" fill="#272838"/>
                <rect y="10" width="38" height="6" fill="#272838"/>
            </svg>
            <svg id="close" xmlns="http://www.w3.org/2000/svg" width="26" height="22" viewBox="0 0 32 32" fill="none">
            <rect y="26.8701" width="38" height="6" transform="rotate(-45 0 26.8701)" fill="#272838"/>
            <path d="M4.24268 0L31.1127 26.8701L26.8701 31.1127L3.51667e-05 4.24264L4.24268 0Z" fill="#272838"/>
        </svg>
        </div>
    </nav><!-- #site-navigation -->
</header><!-- #masthead -->
<div class="spacer"></div><!-- #masthead -->
