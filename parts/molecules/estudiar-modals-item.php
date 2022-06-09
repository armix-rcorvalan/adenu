<?php
/**
 * Estudiar Modals Item
 *
 * @package ARMIX
 */

?>

<div class="estudiar-modals-item <?php if ( isset( $class ) && $class ) echo $class; ?>" id="estudiar-modals-item-<?php echo esc_attr( $item_key ); ?>">
	
	<img class="estudiar-modals-item__image" src="<?php echo esc_attr( $item['image'] ); ?>">

	<h3 class="estudiar-modals-item__title"><?php echo esc_attr( $item['title'] ); ?></h3>

	<div class="estudiar-modals-item__resolution"><?php echo esc_attr( $item['resolution'] ); ?></div>

	<div class="estudiar-modals-item__editor"><?php echo wp_kses_post( $item['editor'] ); ?></div>

	<?php if ( $item['plan'] ) : ?>
		<div class="estudiar-modals-item__plan">
			<h4 class="studiar-modals-item__plan-title">Plan de Estudios</h4>
			<a href="<?php echo esc_url( $item['plan'] ); ?>" class="studiar-modals-item__plan-button">Descargar</a>
		</div>	
	<?php endif ?>

	<?php if ( $item['process'] && is_array( $item['process'] ) ) : ?>
		<div class="estudiar-modals-item__process">
			<?php foreach ( $item['process'] as $process_item ) : ?>
				<div class="estudiar-modals-item__process-item">
					<img class="estudiar-modals-item__process-item-image" src="<?php echo esc_attr( $process_item['image'] ); ?>">
					<h4 class="estudiar-modals-item__process-item-title"><?php echo esc_attr( $process_item['title'] ); ?></h4>
					<div class="estudiar-modals-item__content"><?php echo wp_kses_post( $process_item['content'] ); ?></div>
				</div>
			<?php endforeach ?>
		</div>	
	<?php endif ?>


</div>

<?php
unset( $class );