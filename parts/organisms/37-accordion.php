<?php
/**
 * Accordion
 *
 * @package ARMIX
 */

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 37-accordion <?php if ( isset( $accordion_style ) ) echo '37-accordion--' . $accordion_style; ?>">
	<div class="37-accordion__inner global-inner">
		<?php if ( isset( $accordion_title ) && ! empty( $accordion_title ) ) : ?>
		<h2 class="37-accordion__title"><?php echo esc_attr( $accordion_title ); ?></h2>
		<?php endif; ?>
		<div class="37-accordion__items">
			<?php foreach ( $accordion_items as $item ) : ?>
			<div class="37-accordion__item">
				<a href="" class="37-accordion__item-title"><?php echo esc_attr( $item['title'] ); ?></a>
				<div class="37-accordion__item-content"><?php echo wp_kses_post( $item['content'] ); ?></div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<hr>

<?php
unset( $accordion_items );
unset( $accordion_title );
unset( $accordion_style );