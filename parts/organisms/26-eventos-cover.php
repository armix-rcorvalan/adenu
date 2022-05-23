<?php
/**
 * Eventos Cover
 *
 * @package ARMIX
 */

setlocale( LC_ALL, 'es_ES', 'Spanish_Spain', 'Spanish' );
$date = get_field( 'date' );
$date = DateTime::createFromFormat( 'd/m/Y', $date, new DateTimeZone( wp_timezone_string() ) );

?>

<div class="16-eventos-cover">
	<div class="16-eventos-cover__inner global-inner">

		<div class="16-eventos-cover__date">
			<div class="16-eventos-cover__date-day"><?php echo esc_attr( $date->format('d') ); ?></div>
			<div class="16-eventos-cover__date-day"><?php echo esc_attr( date_i18n( 'D', $date->getTimestamp() ) ); ?></div>
		</div>

		<div class="16-eventos-cover__hour"><?php the_field( 'hour' ); ?></div>
		
		<div class="16-eventos-cover__image-wrapper">
			<img src="<?php the_post_thumbnail_url( '16-eventos-cover', 'post-item-featured' ); ?>" class="16-eventos-cover__image" />
		</div>
		
		<h3 class="16-eventos-cover__title"><?php the_title(); ?></h3>
		
		<div class="16-eventos-cover__excerpt"><?php the_excerpt(); ?></div>

		<?php if ( get_field( 'modality' ) ) : ?>
			<div class="16-eventos-cover__modality">Modalidad: <?php the_field( 'modality' ); ?></div>
		<?php endif; ?>

		<?php if ( get_field( 'address' ) ) : ?>
			<div class="16-eventos-cover__address">Dirección: <?php the_field( 'address' ); ?></div>
		<?php endif; ?>

	</div>
</div>


<hr>