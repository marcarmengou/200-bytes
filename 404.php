<?php get_header(); ?>
<main>
    <h2><?php esc_html_e( 'Oops! That page can’t be found.', '200-bytes' ); ?></h2>
    <p><?php esc_html_e( 'It looks like nothing was found at this location.', '200-bytes' ); ?></p>
    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go to homepage', '200-bytes' ); ?></a></p>
</main>
<?php get_footer(); ?>
