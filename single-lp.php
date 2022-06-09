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
		require TD . '/parts/organisms/44-lp-menu.php';
		require TD . '/parts/organisms/35-decanaturas-main.php';

		$for_you         = reset( get_field( 'for_you' ) );
		$accordion_title = $for_you['title'];
		$accordion_items = $for_you['items'];
		$accordion_style = $for_you['style'];
		require TD . '/parts/organisms/37-accordion.php';

		$editor_title = get_field( 'requirements_title' );
		$editor       = get_field( 'requirements_content' );
		require TD . '/parts/organisms/36-editor.php';

		require TD . '/parts/organisms/43-estudiar-slider.php';
	}
}

?>


<?php get_footer(); ?>
