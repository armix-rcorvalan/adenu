<?php
/**
 * Slider Image Text
 *
 * @package ARMIX
 */

$group = get_sub_field( '33_decanaturas_list' );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 33-decanaturas-list 33-decanaturas-list--<?php echo esc_attr( $group['style'] ); ?>">
	<div class="33-decanaturas-list__inner global-inner">
		<hgroup class="33-decanaturas-list__hgroup">
			<h2 class="33-decanaturas-list__title"><?php echo esc_attr( $group['title'] ); ?></h2>
			<h3 class="33-decanaturas-list__subtitle"><?php echo esc_attr( $group['subtitle'] ); ?></h3>
		</hgroup>
		
		<div class="33-decanaturas-list__loop">
			<?php 
			$class = '33-decanaturas-list__item';
			foreach ( $group['list'] as $post )
			{
				setup_postdata( $post );
				require TD . '/parts/molecules/decanaturas-item.php';
				wp_reset_postdata();
			}
			?>
		</div>
	</div>
</div>

<hr>