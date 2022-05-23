<?php
/**
 * Eventos video
 *
 * @package ARMIX
 */

$video = get_field( 'video' );

?>

<?php if ( is_array( $video ) && ! empty( $video ) ) : ?>
<div class="module-<?php echo esc_attr( $module_count ); ?> 30-eventos-video">
	<div class="30-eventos-video__inner global-inner">
		<div class="30-eventos-video__oembed">
			<?php echo $video['oembed']; ?>
		</div>
		<h2 class="30-eventos-video__title"><?php echo esc_attr( $video['title'] ); ?></h2>
		<div class="30-eventos-video__excerpt"><?php echo wp_kses_post( $video['excerpt'] ); ?></div>
	</div>
</div>

<hr>
<?php endif; ?>