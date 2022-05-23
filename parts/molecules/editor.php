<?php
/**
 * Editor
 *
 * @package ARMIX
 */

?>

<div class="editor <?php if ( isset( $class ) && $class ) echo $class; ?>">
	<?php the_content(); ?>
</div>

<?php

unset( $class );