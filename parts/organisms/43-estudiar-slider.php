<?php
/**
 * Estudiar Slider
 *
 * @package ARMIX
 */

$group = get_field( 'slider' );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 43-estudiar-slider">
	<div class="43-estudiar-slider__inner global-inner">
		<div class="43-estudiar-slider__slider">
			<?php foreach ( $group as $slide ) : ?>
				<div class="43-estudiar-slider__slide">
					<img src="<?php echo esc_url( $slide['image'] ); ?>" class="43-estudiar-slider__image">
					<h2 class="43-estudiar-slider__title"><?php echo esc_attr( $slide['title'] ); ?></h2>
					<div class="43-estudiar-slider__excerpt"><?php echo wp_kses_post( $slide['content'] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
