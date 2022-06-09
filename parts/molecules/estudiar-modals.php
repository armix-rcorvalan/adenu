<?php
/**
 * Estudiar Modals
 *
 * @package ARMIX
 */

?>

<div class="estudiar-modals <?php if ( isset( $class ) && $class ) echo $class; ?>">
	<?php 
	$class = 'estudiar-modals__item';
	foreach ( $items as $item_key => $item )
	{
		require TD . '/parts/molecules/estudiar-modals-item.php';
	}
	?>
</div>

<?php
unset( $class );