<?php
/**
 * Blog Category List
 *
 * @package ARMIX
 */

$args = array(
	'taxonomy' => 'blog-categoria',
	'hide_empty' => false,
);

$terms = get_terms( $args ); 

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 09-blog-category-list">
	<div class="09-blog-category-list__inner global-inner">
		<nav class="09-blog-category-list__nav">
			<ul class="09-blog-category-list__list">
			<?php foreach ( $terms as $item ) : ?>
				<li class="09-blog-category-list__item">
					<a href="<?php echo esc_url( get_term_link( $item ) ); ?>" class="09-blog-category-list__link"><?php echo esc_attr( $item->name ); ?></a>
				</li>
			<?php endforeach ?>
			</ul>
		</nav>
	</div>
</div>
