<?php
/**
 * Eventos map
 *
 * @package ARMIX
 */

$map = get_field( 'map' );

?>

<?php if ( is_array( $map ) && ! empty( $map ) ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 28-eventos-map">
	<div class="28-eventos-map__inner global-inner">
		<h2 class="28-eventos-map__title">Ubicación</h2>
		<div class="28-eventos-map__map" id="eventos-map" data-lat='<?php echo esc_attr( $map['lat'] ); ?>' data-lng='<?php echo esc_attr( $map['lng'] ); ?>'>
		</div>
	</div>
</div>

<hr>
<?php endif; ?>