<?php
/**
 * Solid Boxes
 *
 * @package ARMIX
 */

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 38-solid-boxes 38-solid-boxes--count-<?php echo esc_attr( count( $solid_boxes_items ) ); ?>">
	<div class="38-solid-boxes__inner global-inner">
		<?php if ( isset( $solid_boxes_title ) && ! empty( $solid_boxes_title ) ) : ?>
		<h2 class="38-solid-boxes__title"><?php echo esc_attr( $solid_boxes_title ); ?></h2>
		<?php endif; ?>
		<div class="38-solid-boxes__items">
			<?php foreach ( $solid_boxes_items as $item ) : ?>
			<div class="38-solid-boxes__item">

				<?php if ( isset( $item['icon'] ) && ! empty( $item['icon'] ) ) : ?>
				<img src="<?php echo esc_url( $item['icon'] ); ?>" class="38-solid-boxes__item-icon" />
				<?php endif; ?>
				
				<?php if ( isset( $item['title'] ) && ! empty( $item['title'] ) ) : ?>
				<h4 class="38-solid-boxes__item-title"><?php echo esc_attr( $item['title'] ); ?></h4>
				<?php endif; ?>
				
				<?php if ( isset( $item['content'] ) && ! empty( $item['content'] ) ) : ?>
				<div class="38-solid-boxes__item-content"><?php echo wp_kses_post( $item['content'] ); ?></div>
				<?php endif; ?>

			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<hr>

<?php
unset( $solid_boxes_items );
unset( $solid_boxes_title );