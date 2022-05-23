<?php
/**
 * Taxonomy Post Categoria
 *
 * @package ARMIX
 */

$exclude_ids = array();
$term        = get_queried_object();

?>
<?php get_header(); ?>

<?php 

// Cover
require TD . '/parts/organisms/03-cover.php';


// Featured post Item 1
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 1,
	'post__not_in'   => $exclude_ids,
	'tax_query' => array(
		array (
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => $term->slug,
		)
	),
);
$post_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $post_query, $exclude_ids );
require TD . '/parts/organisms/18-featured-post-item.php';


// post Loop (9 elementos)
$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 9,
	'post__not_in'   => $exclude_ids,
	'tax_query' => array(
		array (
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => $term->slug,
		)
	),
);
$post_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $post_query, $exclude_ids );
require TD . '/parts/organisms/15-post-loop.php';

?>


<?php get_footer(); ?>
a