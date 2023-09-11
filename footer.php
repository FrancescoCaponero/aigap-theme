<footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'text-domain' ) ); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf( esc_html__( 'Proudly powered by %s', 'text-domain' ), 'WordPress' );
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( 'Theme: %1$s by %2$s.', 'text-domain' ), 'theme_name', '<a href="https://example.com/">Your Name</a>' );
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
