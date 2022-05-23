<?php
/**
 * Eventos Sponsors
 *
 * @package ARMIX
 */

$sponsors = get_field( 'sponsors' );

?>

<?php if ( is_array( $sponsors ) && ! empty( $sponsors ) ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 28-eventos-sponsors">
	<div class="28-eventos-sponsors__inner global-inner">
		<h2 class="28-eventos-sponsors__title">Sponsors</h2>
		<div class="28-eventos-sponsors__carousel">
			<?php foreach ( $sponsors as $item ) : ?>
				<?php if ( ! empty( $item['link'] ) && filter_var( $item['link'], FILTER_VALIDATE_URL ) ) : ?>
					<a href="<?php echo esc_url( $item['link'] ); ?>" class="28-eventos-sponsors__carousel-item">
						<img src="<?php echo esc_url( $item['image'] ); ?>" class="28-eventos-sponsors__carousel-image">
					</a>
				<?php else : ?>
					<div class="28-eventos-sponsors__carousel-item">
						<img src="<?php echo esc_url( $item['image'] ); ?>" class="28-eventos-sponsors__carousel-image">
					</div>
				<?php endif; ?>
			<?php endforeach ?>
		</div>
	</div>
</div>

<hr>
<?php endif; ?>