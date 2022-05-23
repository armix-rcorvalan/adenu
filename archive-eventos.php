<?php
/**
 * Archive Eventos
 *
 * @package ARMIX
 */

$exclude_ids = array();

?>
<?php get_header(); ?>

<?php 

// Featured Eventos Item 1
$args = array(
	'post_type' => 'eventos',
	'posts_per_page' => 1,
	'post__not_in'   => $exclude_ids,
);
$eventos_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $eventos_query, $exclude_ids );
require TD . '/parts/organisms/16-featured-eventos-item.php';


// Eventos Loop (9 elementos)
$args = array(
	'post_type'      => 'eventos',
	'posts_per_page' => 9,
	'post__not_in'   => $exclude_ids,
);
$eventos_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $eventos_query, $exclude_ids );
require TD . '/parts/organisms/17-eventos-loop.php';

?>


<?php get_footer(); ?>
