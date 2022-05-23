<?php
/**
 * Instagram Posts
 *
 * @package ARMIX
 */

$group = get_sub_field( '07_instagram_posts' );

$instagram_user = $group['user'];

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 07-instagram-posts">
	<div class="07-instagram-posts__inner global-inner">
		<h2 class="07-instagram-posts__title">Nuestro Instagram</h2>

		<a href="<?php echo esc_url( $group['link'] ); ?>" class="07-instagram-posts__follow">¡Seguinos!</a>
	</div>
</div>
