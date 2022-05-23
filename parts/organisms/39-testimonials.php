<?php
/**
 * Testimonials
 *
 * @package ARMIX
 */

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 39-testimonials 39-testimonials--count-<?php echo esc_attr( count( $testimonials_items ) ); ?>">
	<div class="39-testimonials__inner global-inner">

		<?php if ( isset( $testimonials_title ) && ! empty( $testimonials_title ) ) : ?>
		<h2 class="39-testimonials__title"><?php echo esc_attr( $testimonials_title ); ?></h2>
		<?php endif; ?>

		<div class="39-testimonials__items">
			<?php foreach ( $testimonials_items as $item ) : ?>
			<div class="39-testimonials__item">

				<?php if ( isset( $item['oembed'] ) && ! empty( $item['oembed'] ) ) : ?>
				<div class="39-testimonials__item-oembed"><?php echo $item['oembed']; ?></div>
				<?php endif; ?>

				<?php if ( isset( $item['name'] ) && ! empty( $item['name'] ) ) : ?>
				<p class="39-testimonials__item-name"><?php echo esc_attr( $item['name'] ); ?></p>
				<?php endif; ?>

				<?php if ( isset( $item['job'] ) && ! empty( $item['job'] ) ) : ?>
				<p class="39-testimonials__item-job"><?php echo esc_attr( $item['job'] ); ?></p>
				<?php endif; ?>

			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<hr>

<?php
unset( $testimonials_items );
unset( $testimonials_title );