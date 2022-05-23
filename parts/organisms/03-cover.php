<?php
/**
 * Cover
 * 
 * @package ARMIX
 */

// Archive Decanaturas
if ( is_post_type_archive( 'decanaturas' ) ) 
{
	$cover_title   = 'Decanaturas';
	$cover_image_s = get_field( 'decanaturas_image_s', 'option' );
	$cover_image_l = get_field( 'decanaturas_image_l', 'option' );
}
// Single Decanaturas
else if ( is_singular( 'decanaturas' ) )
{
	$group         = get_field( 'cover' );
	$cover_title   = get_the_title();
	$cover_image_s = $group['image_s'];
	$cover_image_l = $group['image_l'];
}
// Archive Blog
else if ( is_post_type_archive( 'blog' ) ) 
{
	$cover_title   = 'Blog ADENU';
	$cover_image_s = get_field( 'blog_image_s', 'option' );
	$cover_image_l = get_field( 'blog_image_l', 'option' );
}
// Tax Blog Categoria
else if ( is_taxonomy( 'blog-categoria' ) ) 
{
	$term          = get_queried_object();
	$cover_title   = $term->name;
	$cover_image_s = get_field( 'blog_categoria_image_s', $term->taxonomy . '_' . $term->term_id );
	$cover_image_l = get_field( 'blog_categoria_image_l', $term->taxonomy . '_' . $term->term_id );
}
// Tax Post Category
else if ( is_category() ) 
{
	$term          = get_queried_object();
	$cover_title   = $term->name;
	$cover_image_s = get_field( 'category_image_s', $term->taxonomy . '_' . $term->term_id );
	$cover_image_l = get_field( 'category_image_l', $term->taxonomy . '_' . $term->term_id );
} 
// Archive Posts
else if ( is_home() || is_category() )
{
	$cover_title   = 'Noticias ADENU';
	$cover_image_s = get_field( 'posts_image_s', 'option' );
	$cover_image_l = get_field( 'posts_image_l', 'option' );
}
// Archive Posts
else if ( is_page_template( 'template-modules.php' ) )
{
	$group         = get_sub_field( '03_cover' );
	$cover_title   = $group['title'];
	$cover_image_s = $group['image_s'];
	$cover_image_l = $group['image_l'];
}

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 03-cover">

	<picture class="03-cover__picture">
		<source srcset="<?php echo esc_url( $cover_image_l ); ?>" media="(min-width: 768px)">
		<img src="<?php echo esc_url( $cover_image_s ); ?>" class="03-cover__image">
	</picture>

	<div class="03-cover__inner global-inner">
		<h1 class="03-cover__title"><?php echo esc_attr( $cover_title ); ?></h1>
	</div>

</div>

<hr>
