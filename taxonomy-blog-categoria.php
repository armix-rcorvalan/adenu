<?php
/**
 * Taxonomy Blog Categoria
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


// Featured Blog Item 1
$args = array(
	'post_type' => 'blog',
	'posts_per_page' => 1,
	'post__not_in'   => $exclude_ids,
	'tax_query' => array(
		array (
			'taxonomy' => 'blog-categoria',
			'field' => 'slug',
			'terms' => $term->slug,
		)
	),
);
$blog_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $blog_query, $exclude_ids );
require TD . '/parts/organisms/10-featured-blog-item.php';


// Blog Loop (9 elementos)
$args = array(
	'post_type'      => 'blog',
	'posts_per_page' => 9,
	'post__not_in'   => $exclude_ids,
	'tax_query' => array(
		array (
			'taxonomy' => 'blog-categoria',
			'field' => 'slug',
			'terms' => $term->slug,
		)
	),
);
$blog_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $blog_query, $exclude_ids );
require TD . '/parts/organisms/12-blog-loop.php';

?>


<?php get_footer(); ?>
