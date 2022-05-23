<?php
/**
 * Single Related Blog
 *
 * @package ARMIX
 */

$current_tax = wp_get_object_terms( get_the_ID(), 'blog-categoria' );

$terms = array();

if ( is_array( $current_tax ) ) 
{
	foreach ( $current_tax as $term ) 
	{
		$terms[] = $term->slug;
	}
}

$args = array(
	'post_type' => 'blog',
	'posts_per_page' => 1,
	'post__not_in'   => array( get_the_ID() ),
	'tax_query' => array(
		array (
			'taxonomy' => 'blog-categoria',
			'field' => 'slug',
			'terms' => $terms,
		)
	),
);
$blog_query  = new WP_Query( $args );

?>

<?php if ( $blog_query->have_posts() ) : ?>
<div class="single-related-blog">
	<div class="single-related-blog__inner global-inner">
		<h2 class="single-related-blog__title">Nota relacionada</h2>
		<?php 
		while ( $blog_query->have_posts() ) 
		{
			$blog_query->the_post();
			$class    = 'single-related-blog__item';
			require TD . '/parts/molecules/post-item.php';
		}
		?>
	</div>
</div>
<?php endif; ?>

<hr>

<?php

unset( $class );