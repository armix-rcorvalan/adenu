<?php
/**
 * Single Decanaturas
 *
 * @package ARMIX
 */

?>

<?php get_header(); ?>


<?php 

if ( have_posts() )
{
	while ( have_posts() )
	{
		the_post();
		require TD . '/parts/organisms/03-cover.php';
		require TD . '/parts/organisms/34-decanaturas-menu.php';
		require TD . '/parts/organisms/35-decanaturas-main.php';

		$editor_title = get_field( 'goals_title' );
		$editor       = get_field( 'goals_content' );
		require TD . '/parts/organisms/36-editor.php';

		$for_you         = reset( get_field( 'for_you' ) );
		$accordion_title = $for_you['title'];
		$accordion_items = $for_you['items'];
		$accordion_style = $for_you['style'];
		require TD . '/parts/organisms/37-accordion.php';

		$admission = reset( get_field( 'admission' ) );
		$solid_boxes_items = $admission['items'];
		$solid_boxes_title = $admission['title'];
		require TD . '/parts/organisms/38-solid-boxes.php';

		$editor_title = get_field( 'requirements_title' );
		$editor       = get_field( 'requirements_content' );
		require TD . '/parts/organisms/36-editor.php';

		$profile         = reset( get_field( 'profile' ) );
		$accordion_title = $profile['title'];
		$accordion_items = $profile['items'];
		$accordion_style = $profile['style'];
		require TD . '/parts/organisms/37-accordion.php';

		$testimonials       = reset( get_field( 'testimonials' ) );
		$testimonials_title = $testimonials['title'];
		$testimonials_items = $testimonials['items'];

		require TD . '/parts/organisms/39-testimonials.php';

	}
}

?>


<?php get_footer(); ?>
