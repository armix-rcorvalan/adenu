<?php
/**
 * Home Slider
 *
 * @package ARMIX
 */

$group = get_sub_field( '01_home_cover' );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 01-home-cover">
	<div class="01-home-cover__inner global-inner">
		<div class="01-home-cover__slider">
			<?php foreach ( $group as $slide ) : ?>
				<div class="01-home-cover__slide">
					<picture class="01-home-cover__picture">
						<source srcset="<?php echo esc_url( $slide['image_l'] ); ?>" media="(min-width: 768px)">
						<img src="<?php echo esc_url( $slide['image_s'] ); ?>" class="01-home-cover__image">
					</picture>
					<hgroup class="01-home-cover__text">
						<h2 class="01-home-cover__title"><?php echo esc_attr( $slide['title'] ); ?></h2>
						<p class="01-home-cover__excerpt"><?php echo esc_attr( $slide['excerpt'] ); ?></p>
					</hgroup>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
