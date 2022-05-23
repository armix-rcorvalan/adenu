<?php
/**
 * Single Related post
 *
 * @package ARMIX
 */

$current_tax = wp_get_object_terms( get_the_ID(), 'category' );

$terms = array();

if ( is_array( $current_tax ) ) 
{
	foreach ( $current_tax as $term ) 
	{
		$terms[] = $term->slug;
	}
}

$args = array(
	'post_type' => 'post',
	'posts_per_page' => 1,
	'post__not_in'   => array( get_the_ID() ),
	'tax_query' => array(
		array (
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => $terms,
		)
	),
);
$post_query  = new WP_Query( $args );

?>

<?php if ( $post_query->have_posts() ) : ?>
<div class="single-related-post">
	<div class="single-related-post__inner global-inner">
		<h2 class="single-related-post__title">Noticia relacionada</h2>
		<?php 
		while ( $post_query->have_posts() ) 
		{
			$post_query->the_post();
			$class    = 'single-related-post__item';
			require TD . '/parts/molecules/post-item.php';
		}
		?>
	</div>
</div>
<?php endif; ?>

<hr>

<?php

unset( $class );