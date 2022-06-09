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
	//wp_register_script( 'jquery.filterizr', 'https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/jquery.filterizr.min.js', array( 'jquery' ), '2.2.4', true );

	/* Register Theme */
	wp_register_script( 'armix.estudiar', TDU . '/javascripts/armix.estudiar.js', array( 'jquery' ), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'armix_add_javascripts' );
