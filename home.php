<?php
/**
 * Archive Post
 *
 * @package ARMIX
 */

$exclude_ids = array();

?>
<?php get_header(); ?>

<?php 

// Featured Post Item 1
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 1,
	'post__not_in'   => $exclude_ids,
);
$post_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $post_query, $exclude_ids );

require TD . '/parts/organisms/14-featured-post-item.php';

// Post Loop (9 elementos)
$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 9,
	'post__not_in'   => $exclude_ids,
);
$post_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $post_query, $exclude_ids );
require TD . '/parts/organisms/15-post-loop.php';

?>


<?php get_footer(); ?>
