<?php
/**
 * Revistas Cover
 *
 * @package ARMIX
 */

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 20-revistas-cover">
	<div class="20-revistas-cover__inner global-inner">
		<hgroup class="20-revistas-cover__hgroup">
			<h1 class="20-revistas-cover__title"><?php the_title(); ?></h1>
			<h2 class="20-revistas-cover__subtitle"><?php the_field( 'subtitle' ); ?></h2>
		</hgroup>
	</div>
</div>

<hr>