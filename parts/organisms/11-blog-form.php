<?php
/**
 * Featured Blog Form
 *
 * @package ARMIX
 */

$form   = get_field( 'blog_form', 'option' );
$banner = get_field( 'blog_banner_1', 'option' );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 11-blog-form">
	<div class="11-blog-form__inner global-inner">
		<h2 class="11-blog-form__title">Solicite más información ahora</h2>
		<div class="11-blog-form__form">
			<?php echo do_shortcode( $form ); ?>
		</div>

		<a href="<?php echo esc_url( $banner['link'] ); ?>" class="11-blog-form__banner-link">
			<picture class="11-blog-form__banner-picture">
				<source srcset="<?php echo esc_url( $banner['image_l'] ); ?>" media="(min-width: 768px)">
				<img src="<?php echo esc_url( $banner['image_s'] ); ?>" class="11-blog-form__banner-image">
			</picture>
		</a>

		<small class="11-blog-form__legend">Al hacer clic en enviar, autorizo las llamadas, correos electrónicos y mensajes de texto de ADEN University al número de teléfono que he proporcionado.</small>
	</div>
</div>

<hr>