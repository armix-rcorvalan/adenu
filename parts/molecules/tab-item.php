<?php
/**
 * Tab Item
 *
 * @package ARMIX
 */

?>

<div class="tab-item <?php if ( isset( $class ) && $class ) echo $class; ?>">
		
	<?php if ( isset( $item['image'] ) && ! empty( $item['image'] ) ) : ?>
	<img src="<?php echo esc_url( $item['image'] ); ?>" class="tab-item__image" />
	<?php endif; ?>
	
	<?php if ( isset( $item['name'] ) && ! empty( $item['name'] ) ) : ?>
	<span class="tab-item__name"><?php echo esc_attr( $item['name'] ); ?></span>
	<?php endif; ?>

	<?php if ( isset( $item['job'] ) && ! empty( $item['job'] ) ) : ?>
	<span class="tab-item__job"><?php echo esc_attr( $item['job'] ); ?></span>
	<?php endif; ?>

	<?php if ( isset( $item['editor'] ) && ! empty( $item['editor'] ) ) : ?>
	<span class="tab-item__editor"><?php echo wp_kses_post( $item['editor'] ); ?></span>
	<?php endif; ?>

	<?php if ( isset( $item['link'] ) && ! empty( $item['link'] ) ) : ?>
	<a href="<?php echo esc_url( $item['link'] ); ?>" class="tab-item__link">Más Info</a>
	<?php endif; ?>

	<?php if ( isset( $item['web'] ) && ! empty( $item['web'] ) ) : ?>
	<a href="<?php echo esc_url( $item['web'] ); ?>" class="tab-item__web"><?php echo esc_url( $item['web'] ); ?></a>
	<?php endif; ?>

</div>

<?php
unset( $class );
