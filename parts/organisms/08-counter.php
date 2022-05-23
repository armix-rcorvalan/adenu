<?php
/**
 * Counter
 *
 * @package ARMIX
 */

$group = get_sub_field( '08_counter' );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 08-counter">
	<div class="08-counter__inner global-inner">
		<div class="08-counter__group">
		<?php foreach ( $group as $item ) : ?>
			<div class="08-counter__item">
				<span class="08-counter__number"><?php echo esc_attr( $item['number'] ); ?></span>
				<span class="08-counter__text"><?php echo esc_attr( $item['text'] ); ?></span>
			</div>
		<?php endforeach ?>
		</div>
	</div>
</div>
