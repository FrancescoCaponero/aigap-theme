<?php
/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Your_Theme_Name
 */

// Set up theme defaults and register support for various WordPress features.
if ( ! function_exists( 'theme_setup' ) ) :
    function theme_setup() {
        // Make theme available for translation.
        load_theme_textdomain( 'text-domain', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register menu locations.
        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'text-domain' ),
        ) );

        // Enable support for Custom Logo.
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );

        // Switch default core markup to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'theme_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
    }
endif;
add_action( 'after_setup_theme', 'theme_setup' );

function theme_enqueue_styles() {
    // Register the style
    wp_register_style( 'theme-style', get_template_directory_uri() . '/dist/style.css', array(), null );

    // Enqueue the style
    wp_enqueue_style( 'theme-style' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_scripts() {
    // Enqueue jQuery (comes bundled with WordPress)
    wp_enqueue_script('jquery');

    // Enqueue your custom navigation script
    wp_enqueue_script('theme-navigation', get_template_directory_uri() . '/dist/navigation.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


// Implement other theme-specific functions below.
