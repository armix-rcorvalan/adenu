<?php
/**
 * Modules
 *
 * @package ARMIX
 */

$module_count = 0;

if ( have_rows( 'modules' ) ) 
{
	while ( have_rows( 'modules' ) ) 
	{
		the_row( 'modules' );

		if ( get_row_layout() == '01_home_cover' ) require TD . '/parts/organisms/01-home-cover.php';
		if ( get_row_layout() == '02_decanaturas_search' ) require TD . '/parts/organisms/02-decanaturas-search.php';
		if ( get_row_layout() == '03_cover' ) require TD . '/parts/organisms/03-cover.php';
		if ( get_row_layout() == '04_contact_form' ) require TD . '/parts/organisms/04-contact-form.php';
		if ( get_row_layout() == '05_last_posts' ) require TD . '/parts/organisms/05-last-posts.php';
		if ( get_row_layout() == '06_featured_events' ) require TD . '/parts/organisms/06-featured-events.php';
		if ( get_row_layout() == '07_instagram_posts' ) require TD . '/parts/organisms/07-instagram-posts.php';
		if ( get_row_layout() == '08_counter' ) require TD . '/parts/organisms/08-counter.php';
		if ( get_row_layout() == '32_slider_image_text' ) require TD . '/parts/organisms/32-slider-image-text.php';
		if ( get_row_layout() == '33_decanaturas_list' ) require TD . '/parts/organisms/33-decanaturas-list.php';

		$module_count++;
	}
}