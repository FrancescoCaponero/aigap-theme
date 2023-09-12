<?php
/**
 * The template for displaying all pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 *
 * @package Your_Theme_Name
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        the_content()
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
