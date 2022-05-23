<?php
/**
 * Single Cover
 *
 * @package ARMIX
 */

?>

<div class="25-single-content">

	<div class="25-single-content__inner global-inner">

		<?php

		$class = '25-single-content__editor';
		require TD . '/parts/molecules/editor.php';

		$class = '25-single-content__horizontal-banner';
		require TD . '/parts/molecules/single-horizontal-banner.php';

		$class = '25-single-content__form';
		require TD . '/parts/molecules/single-form.php';

		$class = '25-single-content__vertical-banner';
		require TD . '/parts/molecules/single-horizontal-banner.php';

		// Related.
		if ( is_singular( 'blog' ) ) 
		{
			$class = '25-single-content__related';
			require TD . '/parts/molecules/single-related-blog.php';
		}
		else if ( is_singular( 'post' ) )
		{
			$class = '25-single-content__related';
			require TD . '/parts/molecules/single-related-post.php';
		}


		?>


	</div>

</div>

<hr>