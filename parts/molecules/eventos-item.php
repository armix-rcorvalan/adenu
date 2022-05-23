<?php
/**
 * Events Item
 *
 * @package ARMIX
 */

setlocale( LC_ALL, 'es_ES', 'Spanish_Spain', 'Spanish' );
$date = get_field( 'date' );
$date = DateTime::createFromFormat( 'd/m/Y', $date, new DateTimeZone( wp_timezone_string() ) );

?>

<div class="events-item">
	<div class="events-item__inner global-inner">

		<div class="events-item__date">
			<div class="events-item__date-day"><?php echo esc_attr( $date->format('d') ); ?></div>
			<div class="events-item__date-day"><?php echo esc_attr( date_i18n( 'D', $date->getTimestamp() ) ); ?></div>
		</div>

		<div class="events-item__hour"><?php the_field( 'hour' ); ?></div>
		
		<a href="<?php the_permalink(); ?>" class="events-item__image-link">
			<img src="<?php the_post_thumbnail_url( 'events-item' ); ?>" class="events-item__image" />
		</a>
		
		<h3 class="events-item__title">
			<a href="<?php the_permalink(); ?>" class="events-item__title-link"><?php the_title(); ?></a>
		</h3>
		
		<div class="events-item__excerpt"><?php the_excerpt(); ?></div>

		<a href="<?php the_permalink(); ?>" class="events-item__read-more">Conocé más</a>

	</div>
</div>
