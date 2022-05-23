<?php
/**
 * Decanaturas Form
 *
 * @package ARMIX
 */

?>

<div class="decanaturas-form <?php if ( isset( $class ) && $class ) echo $class; ?>">
	<h3 class="decanaturas-form">¡SOLICITE MÁS INFORMACIÓN AHORA!</h3>
	<?php echo do_shortcode( get_field( 'decanaturas_form', 'option' ) ); ?>
</div>

<hr>

<?php

unset( $class );