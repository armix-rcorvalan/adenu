<?php
/**
 * Contact Form
 *
 * @package ARMIX
 */

$group = get_sub_field( '04_contact_form' );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 04-contact-form">
	<div class="04-contact-form__inner global-inner">
		<h2 class="04-contact-form__title">Solicite más información ahora</h2>
		<div class="04-contact-form__form">
			<?php echo do_shortcode( $group['shortcode'] ); ?>
		</div>
		<small class="04-contact-form__legend">Al hacer clic en enviar, autorizo las llamadas, correos electrónicos y mensajes de texto de ADEN University al número de teléfono que he proporcionado.</small>
	</div>
</div>
