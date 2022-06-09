<?php
/**
 * Single Revistas
 *
 * @package ARMIX
 */

wp_enqueue_script( 'armix.estudiar' );

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	
	<?php while ( have_posts() ) : the_post(); ?>

		<?php require TD . '/parts/organisms/41-estudiar-cover.php'; ?>
		<?php require TD . '/parts/organisms/42-estudiar-main.php'; ?>
		<?php require TD . '/parts/organisms/43-estudiar-slider.php'; ?>

	<?php endwhile; ?>	

<?php endif; ?>


<?php get_footer(); ?>
