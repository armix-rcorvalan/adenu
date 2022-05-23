<?php
/**
 * Javacripts
 *
 * @package armix
 */

/**
 * Armix Add Javascripts
 */
function armix_add_javascripts() {

	/* Register Lib	 */
	wp_register_script( 'jquery.slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( 'jquery' ), '1.9.0', true );
	wp_register_script( 'jquery.sticky', 'https://cdn.jsdelivr.net/gh/garand/sticky@1.0.4/jquery.sticky.js', array( 'jquery' ), '1.0.4', true );
	wp_register_script( 'jquery.stickme', TDU . '/javascripts/jquery.stickme.min.js', array( 'jquery' ), '1.2.1', true );
	wp_register_script( 'jquery.stickybox', TDU . '/javascripts/jquery.stickybox.js', array( 'jquery' ), '1.2.1', true );
	wp_register_script( 'jquery.stickit', TDU . '/javascripts/jquery.stickit.min.js', array( 'jquery' ), '1.2.1', true );
	wp_register_script( 'owl.carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
	wp_enqueue_script( 'jquery.matchHeight', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', array( 'jquery' ), '0.7.2', false );

	/* Register Theme */
	wp_register_script( 'armix.header', TDU . '/javascripts/armix.header.js', array( 'jquery' ), '1.03', true );
	wp_register_script( 'armix.main-slider', TDU . '/javascripts/armix.main-slider.js', array( 'jquery', 'jquery.slick' ), '1.0', true );
	wp_register_script( 'armix.products-carousel', TDU . '/javascripts/armix.products-carousel.js', array( 'jquery', 'owl.carousel', 'jquery.matchHeight' ), '1.0', true );
	wp_register_script( 'armix.categories-carousel', TDU . '/javascripts/armix.categories-carousel.js', array( 'jquery', 'owl.carousel' ), '1.0', true );
	wp_register_script( 'armix.products-gallery', TDU . '/javascripts/armix.products-gallery.js', array( 'jquery', 'jquery.slick' ), '1.0', true );
	wp_register_script( 'armix.single-product', TDU . '/javascripts/armix.single-product.js', array( 'jquery', 'jquery.stickit' ), '1.0', true );
	wp_register_script( 'armix.products-filters', TDU . '/javascripts/armix.products-filters.js', array( 'jquery' ), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'armix_add_javascripts' );
