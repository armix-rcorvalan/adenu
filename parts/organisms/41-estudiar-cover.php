<?php
/**
 * Estudiar Cover
 *
 * @package ARMIX
 */

$cover = get_field( 'cover' );

?>

<div class="41-estudiar-cover">
	<picture class="41-estudiar-cover__picture">
		<source srcset="<?php echo esc_url( $cover['image_l'] ); ?>" media="(min-width: 768px)">
		<img src="<?php echo esc_url( $cover['image_s'] ); ?>" class="41-estudiar-cover__image">
	</picture>
</div>

<hr>