<?php
/**
 * Estudiar Form
 *
 * @package ARMIX
 */

?>

<div class="estudiar-contact-form <?php if ( isset( $class ) && $class ) echo $class; ?>">
	<h3 class="estudiar-contact-form__title">¡SOLICITE MÁS INFORMACIÓN AHORA!</h3>
	<?php echo do_shortcode( get_field( 'estudiar_form', 'option' ) ); ?>
</div>

<hr>

<?php

unset( $class );