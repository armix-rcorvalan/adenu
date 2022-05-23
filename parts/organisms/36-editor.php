<?php
/**
 * Editor
 *
 * @package ARMIX
 */

if ( !isset( $editor ) || empty( $editor ) )
{
	$editor = get_the_content();
}

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> 36-editor">
	<div class="36-editor__inner global-inner">
		<?php if ( isset( $editor_title ) && ! empty( $editor_title ) ) : ?>
		<h2 class="36-editor__title"><?php echo esc_attr( $editor_title ); ?></h2>
		<?php endif; ?>
		<div class="36-editor__content editor"><?php echo wp_kses_post( $editor ); ?></div>
	</div>
</div>

<hr>

<?php
unset( $editor );
unset( $editor_title );