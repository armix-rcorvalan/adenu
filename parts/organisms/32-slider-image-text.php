<?php
/**
 * Slider Image Text
 *
 * @package ARMIX
 */

$group = get_sub_field( '32_slider_image_text' );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 32-slider-image-text">
	<div class="32-slider-image-text__inner global-inner">
		<div class="32-slider-image-text__slider">
			<?php foreach ( $group as $slide ) : ?>
				<div class="32-slider-image-text__slide">
					<img src="<?php echo esc_url( $slide['image'] ); ?>" class="32-slider-image-text__image">
					<h2 class="32-slider-image-text__title"><?php echo esc_attr( $slide['title'] ); ?></h2>
					<p class="32-slider-image-text__text"><?php echo esc_attr( $slide['text'] ); ?></p>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<hr>