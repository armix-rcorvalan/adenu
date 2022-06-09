<?php
/**
 * Search
 *
 * @package ARMIX
 */

?>
<?php get_header(); ?>

<?php require TD . '/parts/organisms/03-cover.php'; ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div><?php the_title(); ?></div>

	<?php endwhile; ?>

	<?php armix_pagination(); ?>

<?php else : ?>

	<div>No hay resultados para la búsqueda</div>

<?php endif; ?>

<?php get_footer(); ?>
