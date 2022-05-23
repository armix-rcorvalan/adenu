<?php
/**
 * Horizontal Banner
 *
 * @package ARMIX
 */

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 13-horizontal-banner">
	<div class="13-horizontal-banner__inner global-inner">

		<a href="<?php echo esc_url( $banner['link'] ); ?>" class="13-horizontal-banner__link">
			<picture class="13-horizontal-banner__picture">
				<source srcset="<?php echo esc_url( $banner['image_l'] ); ?>" media="(min-width: 768px)">
				<img src="<?php echo esc_url( $banner['image_s'] ); ?>" class="13-horizontal-banner__image">
			</picture>
		</a>

	</div>
</div>

<hr>