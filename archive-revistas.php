<?php
/**
 * Archive Revistas
 *
 * @package ARMIX
 */

$exclude_ids = array();

?>
<?php get_header(); ?>

<?php


// Featured revistas Item 1
$args = array(
	'post_type' => 'revistas',
	'posts_per_page' => 1,
	'post__not_in'   => $exclude_ids,
);
$revistas_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $revistas_query, $exclude_ids );
require TD . '/parts/organisms/19-featured-revistas-item.php';


// revistas Loop (9 elementos)
$args = array(
	'post_type'      => 'revistas',
	'posts_per_page' => 9,
	'post__not_in'   => $exclude_ids,
);
$revistas_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $revistas_query, $exclude_ids );
require TD . '/parts/organisms/21-revistas-loop.php';

?>


<?php get_footer(); ?>
