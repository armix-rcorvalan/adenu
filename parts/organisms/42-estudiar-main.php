<?php
/**
 * Estudiar Main
 *
 * @package ARMIX
 */

?>

<div class="42-estudiar-main">
	<div class="42-estudiar-main__inner">
		<?php

		$items = get_field( 'items' );
		
		// $class = '42-estudiar-main__modals';
		// require TD . '/parts/molecules/estudiar-modals.php'; 

		$class = '42-estudiar-main__search-form';
		require TD . '/parts/molecules/estudiar-search-form.php'; 

		$class = '42-estudiar-main__list';
		require TD . '/parts/molecules/estudiar-list.php'; 

		$class = '42-estudiar-main__contact';
		require TD . '/parts/molecules/estudiar-contact-form.php'; 

		?>
	</div>
</div>

<hr>