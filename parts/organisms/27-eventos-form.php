<?php
/**
 * Eventos Form
 *
 * @package ARMIX
 */

$form   = get_field( 'eventos_form', 'option' );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 11-blog-form">
	<div class="11-blog-form__inner global-inner">
		<h2 class="11-blog-form__title">Inscribite</h2>
		<div class="11-blog-form__form">
			<?php echo do_shortcode( $form ); ?>
		</div>
		<small class="11-blog-form__legend">Al hacer clic en enviar, autorizo las llamadas, correos electrónicos y mensajes de texto de ADEN University al número de teléfono que he proporcionado.</small>
	</div>
</div>

<hr>