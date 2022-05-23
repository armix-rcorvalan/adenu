<?php
/**
 * Archive BLOG
 *
 * @package ARMIX
 */

$exclude_ids = array();

?>
<?php get_header(); ?>

<?php 

// Cover
// require TD . '/parts/organisms/03-cover.php';


// Featured Blog Item 1
$args = array(
	'post_type' => 'blog',
	'posts_per_page' => 1,
	'post__not_in'   => $exclude_ids,
);
$blog_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $blog_query, $exclude_ids );
require TD . '/parts/organisms/10-featured-blog-item.php';


// Category List
require TD . '/parts/organisms/09-blog-category-list.php';


// Form
$form   = get_field( 'blog_form', 'option' );
$banner = get_field( 'blog_banner_1', 'option' );
require TD . '/parts/organisms/11-blog-form.php';


// Blog Loop (3 elementos)
$args = array(
	'post_type'      => 'blog',
	'posts_per_page' => 3,
	'post__not_in'   => $exclude_ids,
);
$blog_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $blog_query, $exclude_ids );
require TD . '/parts/organisms/12-blog-loop.php';


// Featured Blog Item 2
$args = array(
	'post_type' => 'blog',
	'posts_per_page' => 1,
	'post__not_in'   => $exclude_ids,
);
$blog_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $blog_query, $exclude_ids );
require TD . '/parts/organisms/10-featured-blog-item.php';


// Blog Loop (3 elementos)
$args = array(
	'post_type'      => 'blog',
	'posts_per_page' => 3,
	'post__not_in'   => $exclude_ids,
);
$blog_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $blog_query, $exclude_ids );
require TD . '/parts/organisms/12-blog-loop.php';


// Horizontal banner
$banner = get_field( 'blog_banner_2', 'option' );
require TD . '/parts/organisms/13-horizontal-banner.php';

// Blog Loop (6 elementos)
$args = array(
	'post_type'      => 'blog',
	'posts_per_page' => 6,
	'post__not_in'   => $exclude_ids,
);
$blog_query  = new WP_Query( $args );
$exclude_ids = armix_get_loop_IDs( $blog_query, $exclude_ids );
require TD . '/parts/organisms/12-blog-loop.php';


?>


<?php get_footer(); ?>
