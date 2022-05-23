<?php
/**
 * Widget
 *
 * @package ARMIX
 */

/**
 * Armix Register Sidebar
 */
function armix_register_sidebar() {

	$args = array(
		'name'          => 'Woocommerce Sidebar',
		'id'            => 'woocommerce-sidebar',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	);

	register_sidebar( $args );

}
add_action( 'widgets_init', 'armix_register_sidebar' );
