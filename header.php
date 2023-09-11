<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="masthead" class="site-header">
    <!-- Hamburger Icon -->
    <div class="menu-toggle hamburger" onclick="toggleMenu()">☰</div>

    <nav id="site-navigation" class="main-navigation">
        <!-- Close Icon -->
        <div class="menu-toggle close-menu" onclick="toggleMenu()">×</div>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        ) );
        ?>
    </nav><!-- #site-navigation -->
</header><!-- #masthead -->
