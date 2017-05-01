<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Kshioshita
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses kshioshita_header_style()
 */
function kshioshita_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'kshioshita_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'black',
		'width'                  => 2000,
		'height'                 => 850,
		'flex-height'            => true,
		'wp-head-callback'       => 'kshioshita_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'kshioshita_custom_header_setup' );

