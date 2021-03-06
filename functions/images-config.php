<?php
/**
 * Images Config
 *
 * @package armix
 */

/**
 * Remove Image Sizes
 *
 * @param array $sizes Sizes.
 * @return array
 */
function armix_remove_image_sizes( $sizes ) {

	unset( $sizes['medium'] );
	unset( $sizes['medium_large'] );
	unset( $sizes['large'] );
	unset( $sizes['course_archive_thumbnail'] );
	unset( $sizes['course_single_thumbnail'] );
	unset( $sizes['lesson_archive_thumbnail'] );
	unset( $sizes['lesson_single_thumbnail'] );
	unset( $sizes['shop_single'] );

	return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'armix_remove_image_sizes' );

/**
 * Remove Image Sizes 2
 */
function armix_remove_image_sizes_2() {
	remove_image_size( 'course_archive_thumbnail' );
	remove_image_size( 'course_single_thumbnail' );
	remove_image_size( 'lesson_archive_thumbnail' );
	remove_image_size( 'lesson_single_thumbnail' );
	remove_image_size( 'shop_catalog' );
	remove_image_size( 'shop_thumbnail' );
	remove_image_size( 'shop_single' );
	remove_image_size( 'woocommerce_gallery_thumbnail' );
	remove_image_size( 'woocommerce_single' );
	remove_image_size( '1536x1536' );
	remove_image_size( '2048x2048' );
}
add_action( 'init', 'armix_remove_image_sizes_2' );

/**
 * Add Image Sizes
 */
function armix_add_image_sizes() {
	add_image_size( 'post-item', 410, 432, true );
	add_image_size( 'post-item-featured', 630, 410, true );
}
add_action( 'init', 'armix_add_image_sizes' );

/**
 * Add Image to Post
 */
function armix_add_image_to_post() {	
	add_theme_support( 'post-thumbnails' );
}
add_action( 'init', 'armix_add_image_to_post' );

/**
 * Add Mime Type
 *
 * @param  array $mimes Mimes.
 * @return array */
function armix_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'armix_mime_types' );
