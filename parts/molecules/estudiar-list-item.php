<?php
/**
 * Estudiar List Item
 *
 * @package ARMIX
 */

?>

<a href="#" 
   class="estudiar-list-item <?php if ( isset( $class ) && $class ) echo $class; ?>" 
   data-id="estudiar-list-item-<?php echo esc_attr( $item_key ); ?>" 
   data-modalidad="<?php echo esc_attr( $item['modalidad'] ); ?>" 
   data-programa="<?php echo esc_attr( $item['programa'] ); ?>"
>
	
	<img class="estudiar-list-item__image" src="<?php echo esc_attr( $item['image'] ); ?>">

	<h3 class="estudiar-list-item__title"><?php echo esc_attr( $item['title'] ); ?></h3>

	<div class="estudiar-list-item__resolution"><?php echo esc_attr( $item['resolution'] ); ?></div>

</a>

<?php
unset( $class );