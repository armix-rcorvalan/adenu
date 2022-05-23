<?php
/**
 * Revistas Shortcode
 *
 * @package ARMIX
 */

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 22-revistas-shorcode">
	<div class="22-revistas-shorcode__inner global-inner">
		<div class="22-revistas-shorcode__shortcode"><?php echo do_shortcode( get_field( 'shortcode' ) ); ?></div>
	</div>
</div>

<hr>