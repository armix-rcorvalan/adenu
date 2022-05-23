<?php
/**
 * Single
 *
 * @package ARMIX
 */

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	
	<?php while ( have_posts() ) : the_post(); ?>

		<?php require TD . '/parts/organisms/24-single-cover.php'; ?>
		<?php require TD . '/parts/organisms/25-single-content.php'; ?>

	<?php endwhile; ?>  

<?php endif; ?>


<?php get_footer(); ?>
