<?php
/**
 * Single Form
 *
 * @package ARMIX
 */

?>

<div class="single-form <?php if ( isset( $class ) && $class ) echo $class; ?>">
	<?php echo do_shortcode( get_field( 'single_form', 'option' ) ); ?>
</div>

<hr>

<?php

unset( $class );