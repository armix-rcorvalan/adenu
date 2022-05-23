<?php
/**
 * Single Eventos
 *
 * @package ARMIX
 */

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	
	<?php while ( have_posts() ) : the_post(); ?>

		<?php require TD . '/parts/organisms/26-eventos-cover.php'; ?>
		<?php require TD . '/parts/organisms/27-eventos-form.php'; ?>
		<?php require TD . '/parts/organisms/28-eventos-sponsors.php'; ?>
		<?php require TD . '/parts/organisms/29-eventos-map.php'; ?>
		<?php require TD . '/parts/organisms/30-eventos-video.php'; ?>
		<?php require TD . '/parts/organisms/31-eventos-utc.php'; ?>

	<?php endwhile; ?>	

<?php endif; ?>


<?php get_footer(); ?>
