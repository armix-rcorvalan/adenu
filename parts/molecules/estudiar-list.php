<?php
/**
 * Estudiar List
 *
 * @package ARMIX
 */

?>

<div class="estudiar-list <?php if ( isset( $class ) && $class ) echo $class; ?>">
	<?php 
	$class = 'estudiar-list__item';
	foreach ( $items as $item_key => $item )
	{
		require TD . '/parts/molecules/estudiar-list-item.php';
	}
	?>
</div>

<?php
unset( $class );