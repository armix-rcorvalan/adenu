<?php
/**
 * Cover
 * 
 * @package ARMIX
 */

global $template;
$template_file = basename( $template );

// Archive Decanaturas
if ( 'archive-decanaturas.php' === $template_file ) 
{
	$cover_title = ( ! isset( $_GET['s'] ) ) ? '' : 'Resultados de búsqueda';
	// BUG: En los que son archives no anda get_field() 
	$cover_image_s = wp_get_attachment_image_url( get_field( 'decanaturas_image_s', 'option' ), 'full' );
	$cover_image_l = wp_get_attachment_image_url( get_field( 'decanaturas_image_l', 'option' ), 'full' );
	echo 'AAA: archive | decanaturas <br>';
}
// Archive Tax Blog Categoria
if ( 'taxonomy-blog-categoria.php' === $template_file ) 
{
	$term          = get_queried_object();
	$cover_title   = $term->name;
	$cover_image_s = get_field( 'blog_categoria_image_s', $term->taxonomy . '_' . $term->term_id );
	$cover_image_l = get_field( 'blog_categoria_image_l', $term->taxonomy . '_' . $term->term_id );
	echo 'AAA: archive | blog-categoria <br>';
}
// Archive Tax Post Category
if ( 'category.php' === $template_file ) 
{
	$term          = get_queried_object();
	$cover_title   = $term->name;
	$cover_image_s = get_field( 'category_image_s', $term->taxonomy . '_' . $term->term_id );
	$cover_image_l = get_field( 'category_image_l', $term->taxonomy . '_' . $term->term_id );
	echo 'AAA: archive | category <br>';
} 
// Single Decanaturas
if ( 'single-decanaturas.php' === $template_file )
{
	$group         = get_field( 'cover' );
	$cover_title   = get_the_title();
	$cover_image_s = $group['image_s'];
	$cover_image_l = $group['image_l'];
	echo 'AAA: single | decanaturas <br>';
}
// Archive Posts
if ( 'template-modules.php' === $template_file )
{
	$group         = get_sub_field( '03_cover' );
	$cover_title   = $group['title'];
	$cover_image_s = $group['image_s'];
	$cover_image_l = $group['image_l'];
	echo 'AAA: single | modules <br>';
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
