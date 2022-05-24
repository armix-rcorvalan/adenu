<?php
/**
 * Tabs
 *
 * @package ARMIX
 */

$group = get_sub_field( '40_tabs' );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 40-tabs 40-tabs--<?php echo esc_attr( $group['kind'] ); ?>">
	<div class="40-tabs__inner global-inner">

		<nav class="40-tabs__nav">
			<ul class="40-tabs__nav-list">
				<?php foreach ( $group['tabs'] as $tab_id => $tab ): ?>
				<li class="40-tabs__nav-item">
					<a href="" class="40-tabs__nav-link" data-tab-id="<?php echo esc_attr( $tab_id ); ?>"><?php echo esc_attr( $tab['name'] ); ?></a>
				</li>
				<?php endforeach ?>
			</ul>
		</nav>

		<div class="40-tabs__content">
			<?php foreach ( $group['tabs'] as $tab_id => $tab ) : ?>
			<div class="40-tabs__content-group"id="tab-<?php echo esc_attr( $tab_id ); ?>">
				<div class="40-tabs__content-items">
					<?php foreach ( $tab['items'] as $item ) : ?>
						<?php
						$class = '40-tabs__content-item tab-item--' . $group['kind'];
						require TD . '/parts/molecules/tab-item.php';
						?>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endforeach; ?>
			
		</div>

	</div>
</div>

<hr>