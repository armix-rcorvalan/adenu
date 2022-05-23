<?php
/**
 * Single Revistas
 *
 * @package ARMIX
 */

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	
	<?php while ( have_posts() ) : the_post(); ?>

		<?php require TD . '/parts/organisms/20-revistas-cover.php'; ?>
		<?php require TD . '/parts/organisms/22-revistas-shortcode.php'; ?>
		<?php require TD . '/parts/organisms/23-revistas-related.php'; ?>

	<?php endwhile; ?>	

<?php endif; ?>


<?php get_footer(); ?>
