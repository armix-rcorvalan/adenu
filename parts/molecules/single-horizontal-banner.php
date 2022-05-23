<?php
/**
 * Single Horizontal Banner
 *
 * @package ARMIX
 */

if ( is_singular( 'blog' ) ) 
{
	$banner = get_field( 'single_blog_banner_1', 'option' );
}
else if ( is_singular( 'post' ) )
{
	$banner = get_field( 'single_post_banner_1', 'option' );
}

?>

<div class="single-horizontal-banner <?php if ( isset( $class ) && $class ) echo $class; ?>">
	<a href="<?php echo esc_url( $banner['link'] ); ?>" class="single-horizontal-banner__link">
		<picture class="single-horizontal-banner__picture">
			<source srcset="<?php echo esc_url( $banner['image_l'] ); ?>" media="(min-width: 768px)">
			<img src="<?php echo esc_url( $banner['image_s'] ); ?>" class="single-horizontal-banner__image">
		</picture>
	</a>
</div>

<hr>

<?php

unset( $class );