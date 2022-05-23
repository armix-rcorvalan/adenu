<?php
/**
 * Eventos UTC
 *
 * @package ARMIX
 */

setlocale( LC_ALL, 'es_ES', 'Spanish_Spain', 'Spanish' );

$date_start = get_field( 'date' ) . ' ' . get_field( 'hour' );
$date_start = DateTime::createFromFormat( 'd/m/Y H:i', $date_start, new DateTimeZone( wp_timezone_string() ) );

$date_end = get_field( 'date' ) . ' ' . get_field( 'hour_end' );
$date_end = DateTime::createFromFormat( 'd/m/Y H:i', $date_end, new DateTimeZone( wp_timezone_string() ) );

$countries = array(
	array(
		'name'      => 'Panamá',
		'timezone'  => 'America/Panama',
	),
	array(
		'name' => 'Honduras',
		'timezone'  => 'America/Tegucigalpa',
	),
	array(
		'name' => 'Argentina',
		'timezone'  => 'America/Argentina/Buenos_Aires',
	),
);

?>


<div class="module-<?php echo esc_attr( $module_count ); ?> 31-eventos-utc">
	<div class="31-eventos-utc__inner global-inner">
		<h2 class="31-eventos-utc__title">Horarios</h2>
		<div class="31-eventos-utc__items">
			<?php foreach ( $countries as $item ) : ?>
			<div class="31-eventos-utc__item">
				<div class="31-eventos-utc__item-name"><?php echo esc_attr( $item['name'] ); ?></div>
				<div class="31-eventos-utc__item-date">
					<?php

					$date_start->setTimezone( new DateTimeZone( $item['timezone'] ) );
					echo $date_start->format( 'H:i' ) . 'hs - ';

					$date_end->setTimezone( new DateTimeZone( $item['timezone'] ) );
					echo $date_end->format( 'H:i' ) . 'hs';

					?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<hr>
